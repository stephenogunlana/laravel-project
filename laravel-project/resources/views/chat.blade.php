<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Chat</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
</head>
<body>
    <div id="app">
        <ul v-for="message in messages">
            <li>@{{ message }}</li>
        </ul>
        <input type="text" v-model="newMessage">
        <button @click="sendMessage">Send</button>
    </div>

    <script>
        const app = new Vue({
            el: '#app',
            data: {
                messages: [],
                newMessage: ''
            },
            mounted() {
                Echo.channel('chat')
                    .listen('MessageSent', (e) => {
                        this.messages.push(e.message);
                    });
            },
            methods: {
                sendMessage() {
                    axios.post('/send', { message: this.newMessage });
                    this.newMessage = '';
                }
            }
        });
    </script>
</body>
</html>
