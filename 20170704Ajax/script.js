var userId = 1;
$('document').ready(function(){

  var root = 'https://jsonplaceholder.typicode.com';
  $('#home').click(function() {
    $.ajax({
      /*A questa funzione gli passiamo un oggetto di tipo Jsono di tipo chaive valore*/

      url: root + '/posts', //passami il post che ha come id=1
      method: 'GET', //il get non lo vedi nella barra dell'indirizzo perchè è una chiamata asincrona
      success: function(data){

        data.map(function(post){ //map è una sorta di foreach
          //console.log(post.title);
          $('section').append('<div id=post'+post.id+'> <h2>'+post.title+'</h2><p>'+post.body+'</p>'+'<button class="btn btn-default" type="button" name="delete" id="delete'+post.id+'">Delete</button></div>');
          $('#delete'+post.id).click(function(){

            if (post.userId == userId) {

              $.ajax({
                url: root + '/posts/'+post.id,
                method: 'DELETE',
                success: function() {
                  console.log("Post number "+post.id+" deleted");
                  $('#post'+post.id).hide('slow', function(){
                    $('#post'+post.id).remove();
                  });
                }
              })
            }else {
              console.log("NO!");
            }
          })
        })
      }
    })

  })

  $('#about').click(function(){
    $.ajax({
      url: 'about.html',
      success: function(data){
        $('section').html(data);
      }
    })
  })

  $('#contactUs').click(function(){
    $.ajax({
      url: 'contactUs.html',
      success: function(data){
        $('section').html(data);
      }
    })
  })
/*cross origin request: il browser applicadelle regole che dicono qual'è la sorgente che può chiamare per prendersi dei dati.

*/

// $.('section').load('about.html') metodo alternativo


})
