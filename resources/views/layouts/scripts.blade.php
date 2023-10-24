<script>
    const fileTempl = document.getElementById("file-template"),
        imageTempl = document.getElementById("image-template"),
        empty = document.getElementById("empty");

    // use to store pre selected files
    let FILES = {};

    // check if file is of type image and prepend the initialied
    // template to the target element
    function addFile(target, file) {
        const fileExtension = file.name.split('.').pop().toLowerCase();
        const isImage = (file.type === 'image/jpeg' || file.type === 'image/jpg') || (fileExtension === 'jpg' ||
            fileExtension === 'jpeg');

        if (isImage) {
            const objectURL = URL.createObjectURL(file);

            const clone = isImage ?
                imageTempl.content.cloneNode(true) :
                fileTempl.content.cloneNode(true);

            clone.querySelector("h1").textContent = file.name;
            clone.querySelector("li").id = objectURL;
            clone.querySelector(".delete").dataset.target = objectURL;
            clone.querySelector(".size").textContent =
                file.size > 1024 ?
                file.size > 1048576 ?
                Math.round(file.size / 1048576) + "mb" :
                Math.round(file.size / 1024) + "kb" :
                file.size + "b";

            isImage &&
                Object.assign(clone.querySelector("img"), {
                    src: objectURL,
                    alt: file.name
                });

            empty.classList.add("hidden");
            target.prepend(clone);

            FILES[objectURL] = file;
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please upload only JPG or JPEG files!'
            });
            return;
        }
    }

    const gallery = document.getElementById("gallery"),
        overlay = document.getElementById("overlay");

    // click the hidden input of type file if the visible button is clicked
    // and capture the selected files
    const hidden = document.getElementById("hidden-input");
    hidden.addEventListener("change", function(event) {
        const files = event.target.files; // Danh sách các tệp đã chọn

        for (const file of files) {
            const reader = new FileReader();

            reader.onload = function(e) {
                // Giá trị Blob của tệp
                const blob = new Blob([e.target.result], {
                    type: file.type
                });

                // Bây giờ bạn có thể sử dụng giá trị Blob ở đây
                console.log(blob);
            };

            // Đọc tệp thành dạng dữ liệu base64
            reader.readAsArrayBuffer(file);
        }
    });

    document.getElementById("button").onclick = () => hidden.click();
    hidden.onchange = (e) => {
        for (const file of e.target.files) {
            addFile(gallery, file);
        }
    };

    // use to check if a file is being dragged
    const hasFiles = ({
            dataTransfer: {
                types = []
            }
        }) =>
        types.indexOf("Files") > -1;

    // use to drag dragenter and dragleave events.
    // this is to know if the outermost parent is dragged over
    // without issues due to drag events on its children
    let counter = 0;

    // reset counter and append file to gallery when file is dropped
    function dropHandler(ev) {
        ev.preventDefault();
        for (const file of ev.dataTransfer.files) {
            addFile(gallery, file);
            overlay.classList.remove("draggedover");
            counter = 0;
        }
    }

    // only react to actual files being dragged
    function dragEnterHandler(e) {
        e.preventDefault();
        if (!hasFiles(e)) {
            return;
        }
        ++counter && overlay.classList.add("draggedover");
    }

    function dragLeaveHandler(e) {
        1 > --counter && overlay.classList.remove("draggedover");
    }

    function dragOverHandler(e) {
        if (hasFiles(e)) {
            e.preventDefault();
        }
    }

    // event delegation to caputre delete events
    // fron the waste buckets in the file preview cards
    gallery.onclick = ({
        target
    }) => {
        if (target.classList.contains("delete")) {
            const ou = target.dataset.target;
            document.getElementById(ou).remove(ou);
            gallery.children.length === 1 && empty.classList.remove("hidden");
            delete FILES[ou];
        }
    };

    // Lắng nghe sự kiện khi người dùng nhấn vào nút "Convert now"
    document.getElementById("submit").addEventListener("click", function(event) {
        // Kiểm tra xem có tệp hình ảnh để chuyển đổi hay không
        if (Object.keys(FILES).length === 0) {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please upload at least one file before converting!'
            });
            return;
        }
    });

    // print all selected files
    document.getElementById("submit").onclick = () => {
        // alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
        console.log(FILES);
    };

    // clear entire selection
    document.getElementById("cancel").onclick = () => {
        while (gallery.children.length > 0) {
            gallery.lastChild.remove();
        }
        FILES = {};
        empty.classList.remove("hidden");
        gallery.append(empty);
    };

    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("removeImage")) {
            const convertedImage = event.target.closest(".convertedImage");

            if (convertedImage) {
                convertedImage.remove();

                const convertedRange = document.getElementById("convertedRange");
                if (convertedRange && convertedRange.children.length === 0) {
                    convertedRange.classList.add("hidden");
                }
            }
        }
    });
</script>
