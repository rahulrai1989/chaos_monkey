Pusher.logToConsole = true;

    var pusher = new Pusher(proess.env.PUSHER_APP_KEY, {
      cluster: 'eu',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });