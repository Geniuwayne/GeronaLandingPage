<?php
//PHP only handles page serving here.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        /* Body Styling */
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://img.freepik.com/free-photo/bright-stationery-calculator-grey-background_23-2148200036.jpg?semt=ais_hybrid&w=740') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        /* Calculator Box Styling */
        .calculator {
            background-color: rgba(51, 51, 51, 0.8); /* Semi-transparent background for the calculator */
            padding: 30px;
            border-radius: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            width: 360px; /* iPhone calculator width */
            max-width: 100%;
        }

        /* Display Styling */
        .display {
            background-color: #000;
            color: white;
            font-size: 48px;
            text-align: right;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            height: 80px;
            line-height: 60px;
            overflow-x: hidden; /* Hide overflow for long numbers */
        }

        /* Button Container */
        .button-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 buttons per row */
            gap: 10px;
        }

        /* Button Styling */
        .button {
            background-color: #3a3a3c;
            color: white;
            font-size: 28px;
            padding: 20px;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        /* Button Hover Effect */
        .button:hover {
            background-color: #505050;
        }

        .button:active {
            background-color: #707070;
        }

        /* Equal and Clear Button Styling */
        .equal {
            background-color: #ff9500;
            color: white;
            font-size: 30px;
            grid-column: span 2; /* Make equal button span two columns */
        }

        .clear {
            background-color: #ff3b30;
            color: white;
            font-size: 28px;
            grid-column: span 2; /* Make clear button span two columns */
        }

        /* Mobile Responsiveness */
        @media (max-width: 480px) {
            .calculator {
                padding: 20px;
                width: 85%;
            }
            .display {
                font-size: 36px;
                padding: 15px;
                height: 70px;
            }
            .button {
                font-size: 24px;
                padding: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div class="display" id="display">0</div>

        <form method="POST" id="calc-form">
            <div class="button-container">
                <!-- Buttons for digits and operations -->
                <button type="button" class="button" onclick="appendToDisplay('7')">7</button>
                <button type="button" class="button" onclick="appendToDisplay('8')">8</button>
                <button type="button" class="button" onclick="appendToDisplay('9')">9</button>
                <button type="button" class="button" onclick="appendToDisplay('+')">+</button>

                <button type="button" class="button" onclick="appendToDisplay('4')">4</button>
                <button type="button" class="button" onclick="appendToDisplay('5')">5</button>
                <button type="button" class="button" onclick="appendToDisplay('6')">6</button>
                <button type="button" class="button" onclick="appendToDisplay('-')">-</button>

                <button type="button" class="button" onclick="appendToDisplay('1')">1</button>
                <button type="button" class="button" onclick="appendToDisplay('2')">2</button>
                <button type="button" class="button" onclick="appendToDisplay('3')">3</button>
                <button type="button" class="button" onclick="appendToDisplay('*')">×</button>

                <button type="button" class="button" onclick="appendToDisplay('0')">0</button>
                <button type="button" class="button" onclick="appendToDisplay('.')">.</button>
                <button type="button" class="button" onclick="calculateResult()">=</button>
                <button type="button" class="button" onclick="appendToDisplay('/')">÷</button>

                <button type="button" class="button clear" onclick="clearDisplay()">C</button>
            </div>
        </form>
    </div>

    <script>
        // Function to append the clicked button to the display
        function appendToDisplay(value) {
            const display = document.getElementById('display');
            if (value === '.' && display.innerText.includes('.')) {
                // Prevent adding more than one dot
                return;
            }

            if (display.innerText === '0' && value !== '.') {
                display.innerText = value;
            } else {
                display.innerText += value;
            }
        }

        // Function to calculate the result
        function calculateResult() {
            const display = document.getElementById('display');
            try {
                display.innerText = eval(display.innerText); // Evaluate the string as a mathematical expression
            } catch (e) {
                display.innerText = "Error"; // Handle errors (e.g., syntax errors)
            }
        }

        // Function to clear the display
        function clearDisplay() {
            const display = document.getElementById('display');
            display.innerText = '0';
        }
    </script>
</body>
</html>
