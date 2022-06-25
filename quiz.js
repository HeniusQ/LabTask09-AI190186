var quiz = {

  data: [
  {
    q : "What is private cloud?",
    o : [
      "A standard cloud service offered via the Internet",
      "A cloud architecture maintained within an enterprise data center",
      "A cloud service inaccessible to anyone but the cultural elite",
      ""
    ],
    a : 1
  },
  {
    q : "What feature does not belong in a private cloud?",
    o : [
      "Metered billing",
      "Self-service portal",
      "Dial-home support",
      "Rapid elasticity"
    ],
    a : 2
  },
  {
    q : "Which of the following isn´t an advantage of cloud?",
    o : [
      "No worries about running out of storage",
      "Easier to maintain a cloud network",
      "Immediate access to computing resources",
      "Paying only for what you use"
    ],
    a : 0
  },
  {
    q : "Which of these services is not Platform as a Service?",
    o : [
      "Force.com",
      "Microsoft Azure",
      "Amazon EC2",
      "Joyent"
    ],
    a : 2
  },
  {
    q : "Amazon Web Services is which type of cloud computing distribution model?",
    o : [
      "Software as a Service",
      "Platform as a Service",
      "Infrastructure as a Service",
      ""
    ],
    a : 2
  }
  ],

  hWrap: null,
  hQn: null,
  hAns: null,

  now: 0,
  score: 0,

  init: () => {
    quiz.hWrap = document.getElementById("quizWrap");

    quiz.hQn = document.createElement("div");
    quiz.hQn.id = "quizQn";
    quiz.hWrap.appendChild(quiz.hQn);

    quiz.hAns = document.createElement("div");
    quiz.hAns.id = "quizAns";
    quiz.hWrap.appendChild(quiz.hAns);

    quiz.draw();
  },

  draw: () => {
    quiz.hQn.innerHTML = quiz.data[quiz.now].q;

    quiz.hAns.innerHTML = "";
    for (let i in quiz.data[quiz.now].o) {
      let radio = document.createElement("input");
      radio.type = "radio";
      radio.name = "quiz";
      radio.id = "quizo" + i;
      quiz.hAns.appendChild(radio);
      let label = document.createElement("label");
      label.innerHTML = quiz.data[quiz.now].o[i];
      label.setAttribute("for", "quizo" + i);
      label.dataset.idx = i;
      label.addEventListener("click", () => { quiz.select(label); });
      quiz.hAns.appendChild(label);
    }
  },

  select: (option) => {
    let all = quiz.hAns.getElementsByTagName("label");
    for (let label of all) {
      label.removeEventListener("click", quiz.select);
    }

    let correct = option.dataset.idx == quiz.data[quiz.now].a;
    if (correct) {
      quiz.score++;
      option.classList.add("correct");
    } else {
      option.classList.add("wrong");
    }

    quiz.now++;
    setTimeout(() => {
      if (quiz.now < quiz.data.length) { quiz.draw(); }
      else {
        quiz.hQn.innerHTML = `You have answered ${quiz.score} of ${quiz.data.length} correctly.`;
        quiz.hAns.innerHTML = "";
      }
    }, 1000);
  },

  reset : () => {
    quiz.now = 0;
    quiz.score = 0;
    quiz.draw();
  }
};
window.addEventListener("load", quiz.init);
