document.getElementById("testForm").addEventListener("submit", function(event) {
    var question = document.getElementById("question").value;
    var option1 = document.getElementById("option1").value;
    var option2 = document.getElementById("option2").value;
    var option3 = document.getElementById("option3").value;
    var option4 = document.getElementById("option4").value;
    var radios = document.querySelectorAll('input[type="radio"]:checked');
    var levelChecked = document.querySelectorAll('input[name="check_level"]:checked');

    if (question === '' || option1 === '' || option2 === '' || option3 === '' || option4 === '' || radios.length === 0 || levelChecked.length === 0) {
        alert("All fields are required.");
        event.preventDefault();
    }
});

//--------------------- open add new test window ------------------------------

let newTest = document.querySelector('.new-test')
let addInfoPanel = document.querySelector('.add-info-table')

newTest.addEventListener('click', () => {
    addInfoPanel.style.display = "block"
    newTest.style.color = "#fff"
})

//--------------------- close add new test window ------------------------------

let closeAddNewTestWindowBtn = document.querySelector('.close')
closeAddNewTestWindowBtn.addEventListener('click', () => {
    addInfoPanel.style.display = "none"
    newTest.style.color = "rgb(174, 172, 172)"
})


function deleteQuestion(questionId) {
    
    if (confirm("Are you sure you want to delete this question?")) {
        window.location.href = "delete_question.php?id=" + questionId;
    }
}


function updateQuestion(questionId) {
    var editedData = {};
    var row = document.querySelector('tr[data-id="' + questionId + '"]');
    var editableFields = row.querySelectorAll('.editable');
    editableFields.forEach(function(field) {
        editedData[field.dataset.field] = field.innerText;
    });

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_question.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(JSON.stringify({ questionId: questionId, data: editedData }));
}

// ------------------------------------------

let logout = document.querySelector('.logout')

logout.addEventListener('click', ()=>{
    window.location.href = '../index.php'
})

// --------------------

let selectClose = document.querySelector('.select-close')
selectClose.addEventListener('click', () => {
    document.querySelector('.show-info-table').style.display = 'none'
    document.querySelector('.test-link').style.color = '#ccc'

})

document.querySelector('.test-link').addEventListener('click', ()=>{
    document.querySelector('.show-info-table').style.display = 'block'
    document.querySelector('.test-link').style.color = '#fff'

})