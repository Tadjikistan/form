$("$sub").on("click", function () {
  var name = $('#name').val().trim();
  var email = $('$email').val() .trim();

  if (email == "") {
    $(#"errormes").text("Введите email");
    return false;
  } else if(name == '') {
    $(#"errormes").text("Введите ваше Имя");
    return false;

  }
  $("#errormes").text("");

$.ajax({
  url:'php/mail.php',
  type: 'POST',
  cache: false,
  data: {'name': name, 'email': email  },
  dataType: 'html',
  beforeSend:  function() {
    $("$sub").prop("disabled", true);
  },
  success: function(data){
    if(data == false )
    alert("Были ошибки , сообщение не отправленно !")
    else
    $("#form").trigger("reset");
    $("$sub").prop("disabled", false);
  }
});
});
