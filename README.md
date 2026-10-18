# TascaS1.07
PHP Errors and Exceptions

# TascaS1.07
Exercises to learn Advanced PHP Error Handling, Exceptions, and Data Validation
Try-Catch Blocks, Native Exceptions, Data Validation & Custom Exception Classes

# 🐘 PHP Error Handling & Data Validation
Welcome to my PHP learning repository! This space is dedicated to collecting practical exercises, code challenges, and advanced concepts regarding Error Handling and Form Validation that I develop as I progress through my training by ITAcademy.

## 🚀 Development Environment
- **PHP** (Version 8.2.12) 
- **Local Server:** XAMPP (Apache)
- **Editor:** Visual Studio Code

## 📂 Repository Structure
The project is organized by difficulty levels according to the assignment requirements:

- **nivel1/** : Core exception handling and data validation foundations.
  - `ejercicio1/` : Mathematical error handling (Division by zero) managed through native PHP `try-catch` blocks.
  - `ejercicio2/` : Form validation rules implementation (checking for empty fields, type checking like numeric validation, etc.) built upon the HTML form from the previous module.
- **nivel2/** : Advanced architecture and custom error handling.
  - `ejercicio1/` : Refactoring the form validation from Nivell 1 by implementing **Custom Exception Classes** to treat specific validation errors elegantly.

## 🛠️ How to Run This Project
Due to the use of user inputs and form handling in **Nivell 1 (Exercici 2)** and **Nivell 2 (Exercici 1)**, this project is best run using a local web server environment like **XAMPP**. Follow these steps to execute the code:

1. **Clone this repository inside XAMPP:** 
   Navigate to your XAMPP installation folder, open the `htdocs` directory, and clone the repository there:
   ```bash
   cd C:/xampp/htdocs (Windows) o /Applications/XAMPP/xamppfiles/htdocs (macOS)
   git clone https://github.com
   ```
2. **Start the local server:** Open the XAMPP Control Panel and start the **Apache** module.
3. **Run the files in your browser:** 
   Open your preferred web browser and navigate to the project URL:
   `http://localhost/TascaS1.07/nivel1/ejercicio2/formulario.html`
   `http://localhost/TascaS1.07/nivel2/ejercicio1/formulario.html`
   From there, you can browse through the folders and test each validation exercise interactively.

Alternatively, for CLI-based scripts (like the division by zero exercise):

1. **Open the folder in your editor:** Open Visual Studio Code, go to File -> Open Folder, and select the cloned repository folder.
2. **Run the files:**
   - Open any `.php` file.
   - Right-click inside the editor and select "Run code" (requires Code Runner extension).

---

Jose - @JoseBermejo-N
