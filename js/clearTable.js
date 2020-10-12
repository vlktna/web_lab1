function clearTable() {
    $.ajax({
        type: "POST",
        url: "clearTable.php",
        data: $(this).serialize(),
        success: function () {
            const iframe = document.getElementById("result_table")
            iframe.src = "../php/createTable.php"
            iframe.style.height = "150px"
        }
    })
}