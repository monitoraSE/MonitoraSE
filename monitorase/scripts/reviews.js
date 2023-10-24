const reviews = [
    {
      id: 1,
      name: 'Maria Silva',
      job: 'Diretora Escolar',
      img: 'https://www.course-api.com/images/people/person-1.jpeg',
      text: "Uma ferramenta incrível para uma comunicação transparente! Os pais podem acompanhar facilmente o progresso acadêmico de seus filhos, promovendo um ambiente de aprendizado colaborativo. Este aplicativo redefine a forma como educadores, pais e alunos interagem no processo educacional.",
    },
    {
      id: 2,
      name: 'Gabriela Morais',
      job: 'Mãe de aluno',
      img: 'https://www.course-api.com/images/people/person-2.jpeg',
      text: 'Este aplicativo de monitoramento estudantil é uma bênção para pais como eu! Finalmente, tenho acesso instantâneo ao progresso acadêmico do meu filho, desde notas em testes até tarefas pendentes. A transparência oferecida é inestimável; agora posso apoiar melhor o aprendizado do meu filho e celebrar suas conquistas em tempo real. Estou verdadeiramente encantada com essa ferramenta que conecta pais, alunos e educadores de uma maneira tão significativa.',
    },
    {
      id: 3,
      name: 'Lucas Oliveira',
      job: 'Professor',
      img: 'https://www.course-api.com/images/people/person-4.jpeg',
      text: 'Uma ferramenta incrível para uma comunicação transparente! Os pais podem acompanhar facilmente o progresso acadêmico de seus filhos, promovendo um ambiente de aprendizado colaborativo. Este aplicativo redefine a forma como educadores, pais e alunos interagem no processo educacional.',
    },
    {
      id: 4,
      name: 'Matheus Andrade',
      job: 'Secretário de Educação',
      img: 'https://www.course-api.com/images/people/person-3.jpeg',
      text: 'Uma verdadeira inovação na educação! Este aplicativo não apenas monitora o desempenho dos alunos, mas também fornece insights perspicazes para personalizar a aprendizagem. Sua capacidade de envolver pais e alunos de maneira interativa é impressionante.',
    },
  ];
  // select items
  const img = document.getElementById('person-img');
  const author = document.getElementById('author');
  const job = document.getElementById('job');
  const info = document.getElementById('info');
  
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const randomBtn = document.querySelector('.random-btn');
  
  // set starting item
  let currentItem = 0;
  
  // load initial item
  window.addEventListener('DOMContentLoaded', function () {
    const item = reviews[currentItem];
    img.src = item.img;
    author.textContent = item.name;
    job.textContent = item.job;
    info.textContent = item.text;
  });
  
  // show person based on item
  function showPerson(person) {
    const item = reviews[person];
    img.src = item.img;
    author.textContent = item.name;
    job.textContent = item.job;
    info.textContent = item.text;
  }
  // show next person
  nextBtn.addEventListener('click', function () {
    currentItem++;
    if (currentItem > reviews.length - 1) {
      currentItem = 0;
    }
    showPerson(currentItem);
  });
  // show prev person
  prevBtn.addEventListener('click', function () {
    currentItem--;
    if (currentItem < 0) {
      currentItem = reviews.length - 1;
    }
    showPerson(currentItem);
  });
  // show random person
  randomBtn.addEventListener('click', function () {
    console.log('hello');
  
    currentItem = Math.floor(Math.random() * reviews.length);
    showPerson(currentItem);
  });