This project is a Full-Stack Web Application—specifically a To-Do List—designed to help you understand how the fundamental components of web development interact with each other.
     
  Because you requested a stack of PHP, MySQL, HTML/CSS, and JavaScript, this project serves as a perfect "Starter" application to demonstrate CRUD (Create, Read, Update, Delete) operations.

  The Core Components:

  1. The Frontend (HTML & Bootstrap CSS):
     - Purpose: To provide the user interface (UI).
     - How it works: It uses Bootstrap 5 to create a responsive, modern-looking layout. It provides the text inputs, buttons, and the "Card" layout that displays your tasks. It also uses CSS to visually
       indicate when a task is "completed" (the strike-through effect).
  2. The Backend (PHP):
     - Purpose: The "brain" of the application.
     - How it works: PHP handles the logic that happens behind the scenes. For example, when you click "Add Task," PHP intercepts that request, sanitizes the data (to prevent security issues), and
       communicates with the database. It then redirects you back to the main page to see the updated list.
  3. The Database (MySQL):
     - Purpose: Permanent memory.
     - How it works: Without a database, your tasks would disappear every time you refreshed the page. MySQL stores your tasks in a structured table. Every time you add or delete a task, the database file is
       updated.
  4. Interaction Flow:
     - User Action: You type a task and hit "Add."
     - Request: The browser sends an HTTP request to actions.php.
     - Processing: actions.php receives the data, talks to MySQL, and saves the new row.
     - Response: The server sends back the index.php page. 
     - Display: The browser renders the new list for you to see.
     
  Why this specific project?

  This is a standard "rite of passage" for developers because it covers 100% of the requirements for a standard web application:
  - Connection: Connecting a web server to a database.
  - Persistence: Keeping data alive after a page refresh.
  - State Management: Switching a task from "pending" to "completed."
  - Security Basics: Using real_escape_string to handle user input safely.