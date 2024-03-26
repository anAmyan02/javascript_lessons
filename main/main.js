// create boxes for lessons

let titles2 = ['Document', ' հիմունքներ', 'Կոդի որակ', 'Օբյեքդներ՝ հիմունքներ', 'Տվյալների տիպեր','Այլ'];
let secondLessonsPages=[
    {
        1.1:'տոգըմէնդ',
        1.2:'Ձեռնարքեր և բնութակրեր',
        1.3:'Կոդի խմբագիրներ',
        1.4:'Console'
    },
    {
        2.1:'Բարև, աշխարհ',
        2.2:'Կոդի կառուցվածքը',
        2.3:'Use strict',
        2.4:'Փոփոխականնէր',
        2.5:'Տվյալների տիպեր',
    },
    {
        3.1:'Debug-ը պրաուզերում',
        3.2:'Կոդավորման ոճը(syntax)',
        3.3:'Մեքնաբանություններ'
    },
    {
        4.1:'Օբյեկտներ',
        4.2:'Օբյեկտի հղումներ և <br> պատճենում',
        4.3:'Garbage collection',
        4.4:"Օբյեկտի մեթոդներ, 'this'",
        4.5:"Կանսդրուկդոր, 'new' <br>օպերատոր",
    },
    {
        5.1:'Պրիմիտիվ տիպերի մեթոդներ',
        5.2:'Numbers',
        5.3:'Strings',
        5.4:'Զանգվածներ',
        5.5:'Զանգվածի մեթոդներ',
    },
    {
        6.1:'Ռեկուրսիա',
        6.2:'spread և rest օպերատորներ',
        6.3:'Փոփոխականների <br>տեսանելության գոտի',
        6.4:'Var հայտարարման ձև',
        6.5:'Գլոբալ օբյեկտ',
    }
]

let secondParentElement = document.querySelector('.second-content-container');
let secondContainersPerRow = 4;
let secondContainerWidth = 315;
let secondContainerHeight = 500;
let secondSpacing = 15;

titles2.forEach((title, index) => {
    let dynamicContainer = document.createElement('div');
    let leftPosition = (index % secondContainersPerRow) * (secondContainerWidth + secondSpacing);
    let topPosition = Math.floor(index / secondContainersPerRow) * (secondContainerHeight + secondSpacing);

    dynamicContainer.innerHTML = `
        <div class="lesson-title" style="width: ${secondContainerWidth}px; height: 67px; left: ${leftPosition}px; top: ${topPosition}px; position: absolute; color: #FFE7AA; 
            font-size: 24px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word; text-align: center; background-color: black; border:2px white solid;
            padding-top: 5px; border-radius: 10px">${title}</div>

        <div class="lesson-box2" style="width: ${secondContainerWidth}px; height: 390px; left: ${leftPosition + 13}px; top: ${topPosition + 90}px; position: absolute; 
            background: black; border-radius: 15px; margin-left: 5px">
        </div>`;
    secondParentElement.appendChild(dynamicContainer);
});

let secondTextTop = 50

secondLessonsPages.forEach((lessonPage, index) => {
    Object.keys(lessonPage).forEach(number => {
        if (number.slice(0, 1) == index + 1 || number.slice(0, 2) == index + 1) {
            let lessonBoxContent = document.querySelectorAll('.lesson-box2')[index];
            lessonBoxContent.innerHTML += `
            <a style="width: ${secondContainerWidth}px; height: 19px; margin-left: 30px; top: ${secondTextTop}px; position: absolute; color: white; 
            font-size: 16px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">${number} ${lessonPage[number]}</a>
            <div style="width: 280px; height: 0px; left: 16.41px; top: ${secondTextTop + 45}px; position: absolute; border: 1px #FFE7AA solid"></div>
`;
        }
        secondTextTop += 50
    } );
    secondTextTop = 50
});

// -------------------------------- hover div for commenmts --------------------------------

let hoverDivStyle = {
    position: 'absolute',
    width: '410px',
    height: '160px',
    top: '4868px',
    left: '680px'
};

let beforeComments = document.querySelector('.before-comments');
let hoverDiv;

beforeComments.addEventListener('mouseenter', () => {
    hoverDiv = document.createElement('div');
    Object.assign(hoverDiv.style, hoverDivStyle);
    document.body.appendChild(hoverDiv);
    hoverDiv.innerHTML = `
        <div class="hover-div">
            <ul style="position: relative; width: 100%; height: 100%; color: white; font-size: 14px; font-family: Noto Sans Armenian; font-weight: 400 ">
                <li>Կոդի մեկ տողի համար օգտագործեք &lt;code&gt; թեգը, <br>կոդի մի քանի տողերի համար օգտագործեք &lt;pre&gt;<br> թեգը</li><br>
                <li>Եթե հոդվածում ինչ-որ բան անհասկանալի է, գրեք կոնկրետ ինչ և որտեղից:</li>
            </ul>
            <img class="hover-img" style="width: 50px; height: 50px; position: absolute; left: 77%;bottom: -44px;" src="../images/main/tringle.png" />
        </div>
    `;
});

beforeComments.addEventListener('mouseleave', () => { 
    if (hoverDiv) {
        hoverDiv.remove();
    }
});


//  ---------------------------------  button to go testing_page from part 3  --------------------------------- 

let thirdButtonToTestin = document.querySelector('.part-three')
thirdButtonToTestin.addEventListener('click', ()=>{
    window.location.href = '../testing_rules/testing_rules.html'
})

//  ---------------------------------  user message window loaded --------------------------------- 

let executed = false;

document.addEventListener('DOMContentLoaded', function () {
    if (!executed) {
        var statisticWindow = document.querySelector('.statistic_window');
        statisticWindow.classList.add('show');
        executed = true;
    }
});

//  ---------------------------------  user message window closed --------------------------------- 


document.querySelector('.statistic_window_close_btn').addEventListener('click',
() => document.querySelector('.statistic_window').style.display = 'none')

setTimeout(() => {
    const message = document.querySelector('.message').value.trim();
    if (message === '') {
        document.querySelector('.statistic_window').style.display = 'none';
    }
}, 3000);


//  ---------------------------------  user message window empty clicked --------------------------------- 

document.querySelector('.statistic_btn').addEventListener('click', () => {
    const messageTextarea = document.querySelector('.message');
    if (messageTextarea.value.trim() === '') {
        messageTextarea.style.border = '2px red solid';
    } else {
        messageTextarea.style.border = '2px black solid';
    }
});


// INSERT INTO `lessons_titles`
// (`title`, `chapter`) 
// VALUES 
// ('JavaScript-ի ներածություն','1.1'),
// ('Ձեռնարքեր և բնութակրեր','1.2'),
// ('Կոդի խմբագիրներ','1.3'),
// ('Console','1.4'),
// ('Բարև, աշխարհ','2.1'),
// ('Կոդի կառուցվածքը','2.2'),
// ('Use strict','2.3'),
// ('Փոփոխականնէր','2.4'),
// ('Տվյալների տիպեր','2.5'),
// ('Взаимодействие: alert, prompt, confirm','2.6'),
// ('Базовые операторы, математика','2.7'),
// ('Операторы сравнения','2.8'),
// ('Условное ветвление: if, <<?>>','2.9'),
// ('Операторы нулевого слияния и присваивания: <<??>>, <<??=>>','2.10'),
// ('Циклы while и for','2.11'),
// ('Конструкция "switch"','2.12'),
// ('Функции','2.13'),
// ('Function Expression','2.14'),
// ('Стрелочные функции, основы','2.15'),
// ('Особенности JavaScript','2.16'),
// ('Debug-ը բրաուզերում','3.1'),
// ('Կոդավորման ոճը(syntax)','3.2'),
// ('Մեկնաբանություններ','3.3'),
// ('Օբյեկտներ','4.1'),
// ('Օբյեկտի հղումներ և <br> պատճենում','4.2'),
// ('Garbage collection','4.3'),
// ('Օբյեկտի մեթոդներ, <<this>>','4.4'),
// ('Կանսդրուկդոր, <<new>> <br>օպերատոր','4.5'),
// ('Պրիմիտիվ տիպերի մեթոդներ','5.1'),
// ('Numbers','5.2'),
// ('Strings','5.3'),
// ('Զանգվածներ','5.4'),
// ('Զանգվածի մեթոդներ','5.5'),
// ('Ռեկուրսիա','6.1'),
// ('spread և rest օպերատորներ','6.2'),
// ('Փոփոխականների <br>տեսանելության գոտի','6.3'),
// ('Var հայտարարման ձև','6.4'),
// ('Գլոբալ օբյեկտ','6.5'),
// ('Синтаксис "new Function"','6.6'),
// ('Планирование: setTimeout и setInterval','6.7'),
// ('Декораторы и переадресация вызова, call/apply','6.8'),
// ('Հատկությունների դրոշներ','7.1'),
// ('getter և setter հատկություններ','7.2'),
// ('Պրոտոտիպային ժառանգականություն','8.1'),
// ('F.prototype','8.1'),
// ('Class-ի կառուցվածքը','9.1'),
// ('ժառանգականությունը <br>class-երում','9.2'),
// ('Static հակություններ և <br>մեթոդներ','9.3'),
// ('Private և protected <br>հատկություններ և մեթոդներ','9.4'),
// ('Extend class-երում','9.5'),
// ('try...catch','10.1'),
// ('Ներածություն՝ callback','11.1'),
// ('Promise','11.2'),
// ('Սխալի մշակում promise-ով','11.3'),
// ('Promise API','11.4'),
// ('Async/await','11.5'),
// ('Ներածություն՝ մոդուլներ','12.1'),
// ('Export և Import','12.2'),
// ('Dynamyc Import','12.3'),
// ('BigInt','13.1'),
// ('Unicode','13.2')

let comԼike = document.querySelectorAll('.like-count')
console.log(comԼike);


