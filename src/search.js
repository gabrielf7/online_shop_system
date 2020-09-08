function searchF(){
  var search = $("#search").val();

  if(search != ''){
    var data = {
      speaks : search
    }
    $.post('index_search_list_client.php', data, function(return_data) {
      $(".result").html(return_data);
    });
  }else{
    $(".result").html("Nenhum produto encontrado");
  }
  return false;
}