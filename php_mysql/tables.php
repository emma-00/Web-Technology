<?php
// Start the session to store and retrieve notes
session_start();

// Initialize the notes array if not already initialized
if (!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = array_fill(1, 31, ''); // Fill days 1 to 31 with empty notes
}

// Check if a note was submitted (from JavaScript)
if (isset($_POST['day']) && isset($_POST['note'])) {
    $day = $_POST['day'];
    $note = $_POST['note'];
    $_SESSION['notes'][$day] = $note; // Save the note for the specific day
}
?>

<html>
    <head>
        <style>
            * {
                padding: 0px;
                margin: 0px;
            }

            #table {
                width: 900px;
                background-color: red;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                margin-top: 20px;
            }

            .cell {
                width: 100px;
                height: 120px; /* Increased height to accommodate note */
                background-color: rgb(177, 229, 255);
                margin: 10px;
                display: inline-block;
                text-align: center;
                line-height: 100px;
                font-size: 1.2em;
                cursor: pointer;
                position: relative; /* Positioning for the note */
                padding-bottom: 20px; /* Make room for the note at the bottom */
            }

            .cell .note {
                position: absolute;
                bottom: 10px; /* Position the note at the bottom of the cell */
                left: 0;
                right: 0;
                text-align: center;
                font-size: 0.9em;
                color: #333;
            }

            .cell:hover {
                background-color: rgb(213, 251, 137);
            }

            @media (max-width: 768px) {
                #table {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div id="table">
            <?php 
            // Display the calendar cells with existing notes
            for($i = 1; $i <= 31; $i++) {
                $note = $_SESSION['notes'][$i]; // Retrieve the stored note for the day
                echo '<div class="cell" onclick="addNote(' . $i . ')">
                        <div>' . $i . '</div>'; // Day number
                if ($note) {
                    echo '<div class="note">' . $note . '</div>'; // Display note at the bottom
                }
                echo '</div>';
            } 
            ?>
        </div>

        <script>
            // Function to handle note addition
            function addNote(day) {
                // Prompt the user for a note
                var note = prompt("Enter a note for day " + day);
                
                // If the user enters a note, send it to PHP for saving
                if (note !== null) {
                    // Create a form and submit it to save the note in the session
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '';

                    // Create hidden inputs for day and note
                    var dayInput = document.createElement('input');
                    dayInput.type = 'hidden';
                    dayInput.name = 'day';
                    dayInput.value = day;
                    form.appendChild(dayInput);

                    var noteInput = document.createElement('input');
                    noteInput.type = 'hidden';
                    noteInput.name = 'note';
                    noteInput.value = note;
                    form.appendChild(noteInput);

                    // Append the form to the body and submit it
                    document.body.appendChild(form);
                    form.submit();
                }
            }
        </script>
    </body>
</html>
