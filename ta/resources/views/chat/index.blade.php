<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChatbotPNP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .wrapper {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px #fff(255, 254, 254, 0.1);
            overflow: hidden;
        }

        .title {
            background-color: #ff5e00;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
        }

        #chatbox {
            max-height: 400px;
            overflow-y: auto;
            padding: 20px;
        }

        .message {
            margin-bottom: 20px;
        }

        .user-message {
            display: flex;
            justify-content: flex-end;
        }

        .user-message .msg-content {
            background-color: #ff5e00;
            color: #fff;
            border-radius: 15px;
            padding: 10px 15px;
            max-width: 70%;
            word-wrap: break-word;
        }

        .bot-message {
            display: flex;
        }

        .bot-message .msg-content {
            background-color: #e9e9eb;
            color: #333;
            border-radius: 15px;
            padding: 10px 15px;
            max-width: 70%;
            word-wrap: break-word;
        }

        #input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 6px;
            padding: 0 5px; /* Tambahkan padding untuk menjauhkan dari tepi */
        }

        #userInput {
            flex: 1;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease-in-out;
        }

        #userInput:focus {
            border-color: #ff5e00; /* Mengubah warna garis tepi saat input mendapatkan fokus */
            outline: none;
        }

        button {
            margin-left: 3px;
            padding: 10px 15px;
            border: none;
            background-color: #ff5e00;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="title">PNP Solusi</div>
        <div id="chatbox"></div>
        <div id="input-container">
            <input type="text" id="userInput" placeholder="Tulis pertanyaan Anda..." autocomplete="off">
            <button onclick="sendQuestion()">Kirim</button>
        </div>
    </div>

    <script>
    function sendQuestion() {
        let question = document.getElementById('userInput').value.trim();

        // Validate if the message is not empty
        if (question === '') {
            alert('Pesan kosong tidak dapat dikirim.');
            return;
        }

        // Add user message to chatbox
        let userMessage = `
            <div class="message user-message">
                <div class="msg-content">${question}</div>
            </div>
        `;
        document.getElementById('chatbox').innerHTML += userMessage;

        // Fetch bot response
        fetch('/chat/reply', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ question: question })
        })
        .then(response => response.json())
        .then(data => {
            let botMessage = `
                <div class="message bot-message">
                    <div class="msg-content">${data.answer}</div>
                </div>
            `;
            document.getElementById('chatbox').innerHTML += botMessage;

            // Scroll to the bottom
            let chatbox = document.getElementById('chatbox');
            chatbox.scrollTop = chatbox.scrollHeight;

            // Clear input
            document.getElementById('userInput').value = '';
        });
    }
    </script>

</body>
</html>
