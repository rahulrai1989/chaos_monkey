Pusher.logToConsole = true;

    var pusher = new Pusher('aa067185cf68f7dd71e2', {
      cluster: 'eu',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });