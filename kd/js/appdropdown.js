$('#personCity').change(function(e) {
    var personCity=$('#personCity').val();
    $.get('../pilihGuru.php', { "city": personCity }, function(result){
        $("#personcityRetrive").html(result);
    });
});
