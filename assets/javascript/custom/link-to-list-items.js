$(document).ready(function() {

  function makeCamelCase(string) {
    var words = string.split(" ");
    for (var i = 0; i < words.length -1; i++ ) {
      words[+1] = words[i+1].charAt(0).toUpperCase() + words[i+1].slice(1);
    }
    console.log(words.join(" "));
    return words.join(" ");
  }

  $('.entry-content :header').each(function() {
    var $text = $(this).text(),
    $camelText = makeCamelCase( $text.replace(/ /g,"") );

    $(this).attr('id', $text);
    var $li = $("<li/>").text($text);
    var $link = $("<a data-smooth-scroll></a>").attr('href', '#' + $text);
    $li.appendTo($link);
    $link.appendTo('#content-list');
  });


  var test = 'hi there whats this?';

});
