$('#reply-text').atwho({
  at:   '@',
  data: window.users,
  tpl:  '<li data-value="@${content}"><img src="${name}" /> ${content}</li>'
})

var $notification = $('.notification');

if($notification.length > 0) {

  $notification.on('click', function() {
    $notification.remove();
  });

  setTimeout(function() {
    $notification.remove();
  }, 3000);

}
