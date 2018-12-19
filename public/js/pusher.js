Pusher.logToConsole = true;

    var pusher = new Pusher('1b03f722e0c5b75ca102', {
      cluster: 'eu',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });