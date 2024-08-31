document.querySelectorAll('.btnDetail').forEach((item) => {
    item.addEventListener('click', (e) => {
      let parent = e.target.parentNode.parentNode;
  
      let picture = parent.querySelector('.card-img-top').src;
      let price = parent.querySelector('.price').innerHTML;
      let title = parent.querySelector('.card-text').innerHTML;
      let details = parent.querySelector('.details') ? parent.querySelector('.details').innerHTML : '<i>no information available</i>';
  
      let tombolModal = document.querySelector('.btnModal');
      tombolModal.click();
  
      document.querySelector('.modalTitle').innerHTML = title;
      let image = document.createElement('img');
      image.src = picture;
      image.classList.add('w-80');
      document.querySelector('.modalImage').innerHTML = '';
      document.querySelector('.modalImage').appendChild(image);
      document.querySelector('.modaldetails').innerHTML = details;
      document.querySelector('.modalprice').innerHTML = price;
  
      const nohp = '62857123123';
      let pesan = `https://api.whatsapp.com/send?phone=${nohp}&text=Hello, this item is still available ? ${picture}`;
  
      document.querySelector('.btnbuying').href = pesan;
    });
  });