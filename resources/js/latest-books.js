console.log('hey!');


const latestBooks = async () => {

    const response = await fetch('api/books/latest');
    const data = await response.json();

    console.log(response);
    console.log(data);

    const content = document.getElementById('latest-books');
    console.log(content);

    data.forEach(element => {
        const book = document.createElement('div');
        book.classList.add('book__card');



        book.innerHTML += `
                <img class='book__image' src="${element.image}" alt="">
                <div class='book__info'>
                <h2 class='book__title' > ${element.title} </h2>
                
                <div class='book__description'> ${element.description} </div>
                <p> ${element.isbn} </p>
                <p> ${element.publication_date} </p> </div>
`;
        content.appendChild(book);
    });


}

latestBooks();

// const image = book.querySelector('book__image');
// const bookInfo = book.querySelector('book__info');

// image.addEventListener('click', () => {

//     bookInfo.classList.toggle('book__info--shown');
// })


// btn.addEventListener('click', getJoke);

// In your latest-books.js write code to:

// Make an AJAX request using fetch to the API endpoint
// parse the response as JSON and get the data
// find the element with id = "latest-books" in the document
// loop through the data(it is an array) and create a new HTML element within the element with id = "latest-books" so that it contains information from the given book