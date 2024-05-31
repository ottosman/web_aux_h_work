$(document).ready(function() {
    $(".write-diary").click(function() {
        window.location.href = "http://localhost/gunluk/write-diary.php";
    });

    $(".read-diary").click(function() {
        window.location.href = "http://localhost/gunluk/read-diary.php";
    });
});


function deleteDiary(id) {
    if (confirm('Silmek istediginize emin misiniz?')) {
        window.location = "./endpoint/delete-diary.php?diary=" + id;
    }
}