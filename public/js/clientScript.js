var scriptUrl =
    "https://script.google.com/macros/s/AKfycbyF9Nvaa5NocKnRdXjuxFJf_h6kmOevzmVMSxlv3KYThQ9Bf6TJMjb4R2Bhqbcwa_py/exec";
function readFiles() {
    return new Promise(function (res, rej) {
        let files = $("input:file")[0].files;
        let filesArr = [];
        $(files).each(function (index) {
            let reader = new FileReader();
            let fileObj = {};
            reader.onload = function () {
                fileObj["fileContent"] = reader.result;
                fileObj["filename"] = files[index].name;
                filesArr.push(fileObj);

                if (filesArr.length == files.length) return res(filesArr);
            };
            reader.readAsDataURL(files[index]);
        });
    });
}

function submit() {
    // Disable submit button
    $("input:button").prop("disabled", true);

    // Show loading spinner
    Swal.fire({
        title: "Uploading Data...",
        allowOutsideClick: false,
        showConfirmButton: false, // Menghilangkan tombol OK
        onBeforeOpen: () => {
            Swal.showLoading();
        },
    });

    let payload = {};
    $("input:text").each(function (index) {
        let propname = $(this).attr("id");
        payload[propname] = $(this).val();
    });

    readFiles()
        .then(function (result) {
            payload["files"] = result;
            payload["totalFiles"] = result.length;
            postPayload(payload)
                .then(function (result) {
                    console.log("completed call");
                    $("input:text").val("");
                    $("input:file").val("");
                    $("input:button").prop("disabled", false);

                    // Close loading modal
                    Swal.close();

                    // Show success message
                    Swal.fire({
                        icon: "success",
                        title: "File Uploaded Successfully",
                    });
                })
                .catch(function (error) {
                    console.log("error occured");
                    $("input:button").prop("disabled", false);

                    // Close loading modal
                    Swal.close();

                    // Show error message
                    Swal.fire({
                        icon: "error",
                        title: "Error Occurred",
                        text: "An error occurred while uploading the file.",
                    });
                });
        })
        .catch(function (err) {
            console.error("some error occured");
            $("input:button").prop("disabled", false);

            // Close loading modal
            Swal.close();

            // Show error message
            Swal.fire({
                icon: "error",
                title: "Error Occurred",
                text: "An error occurred while reading the files.",
            });
        });
}

function postPayload(payload) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: "POST",
            url: scriptUrl,
            data: payload,
            success: function (result) {
                resolve(result);
            },
            error: function (error) {
                reject(error);
            },
        });
    });
}
