const form = document.getElementById("studentForm");

form.addEventListener("submit", function (event) {

    event.preventDefault();

    const fname = document.getElementById("fname").value.trim();
    const lname = document.getElementById("lname").value.trim();
    const sid = document.getElementById("sid").value.trim();
    const email = document.getElementById("email").value.trim();
    const credit = Number(document.getElementById("credit").value);
    const department = document.getElementById("department").value;

    if (fname === "") {
        alert("First Name is required.");
        console.log("First Name is empty.");
        return;
    }

    if (lname === "") {
        alert("Last Name is required.");
        console.log("Last Name is empty.");
        return;
    }

    if (!sid.includes("-")) {
        alert("Student ID must contain '-'.");
        console.log("Invalid Student ID.");
        return;
    }

    if (!email.includes("@student.aiub.edu")) {
        alert("Enter a valid AIUB student email.");
        console.log("Invalid Email.");
        return;
    }

    if (credit < 0 || credit >= 148 || isNaN(credit)) {
        alert("Credit must be between 0 and 147.");
        console.log("Invalid Credit.");
        return;
    }

    if (department === "") {
        alert("Please select a department.");
        console.log("Department not selected.");
        return;
    }

    const student = {
        firstName: fname,
        lastName: lname,
        studentId: sid,
        email: email,
        creditCompleted: credit,
        department: department
    };

    console.log("Student Registered Successfully");
    console.log(student);

    const table = document.getElementById("studentList");
    const row = table.insertRow();

    row.insertCell(0).innerHTML = fname + " " + lname;
    row.insertCell(1).innerHTML = sid;
    row.insertCell(2).innerHTML = email;
    row.insertCell(3).innerHTML = credit;
    row.insertCell(4).innerHTML = department;

    form.reset();
});