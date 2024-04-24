<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChatbotPNP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        #chatbox {
            max-width: 500px;
            margin: 0 auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
        }

        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 10px;
        }

        .user-message {
            background-color: #e2f7cb;
            text-align: right;
        }

        .bot-message {
            background-color: #d4e9ff;
            text-align: left;
        }

        #userInput {
            width: calc(100% - 80px);
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        button {
            width: 60px;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }

    </style>
</head>
<body>

<div id="chatbox">

</div>

<div style="display: flex; margin-top: 20px;">
    <input type="text" id="userInput" placeholder="Tulis pertanyaan Anda..." autocomplete="off">
    <button onclick="sendQuestion()">Kirim</button>
</div>

<script>
function sendQuestion() {
    let question = document.getElementById('userInput').value;

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
        let chatbox = document.getElementById('chatbox');
        chatbox.innerHTML += `
            <div class="message user-message">
                <p><strong>You:</strong> ${question}</p>
            </div>
            <div class="message bot-message">
                <p><strong>BotPNP:</strong> ${data.answer}</p>
            </div>
        `;

        // Clear input
        document.getElementById('userInput').value = '';
    });
}
</script>

</body>
</html>
