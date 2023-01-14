"use strict"

import userData from './userdata.js';

// slider animation
!(function(){
    let sliderContent = document.querySelector('.banner_content');
    let btnsBlock = document.querySelector('.btns_block');
    let btns = document.querySelectorAll('.btn');

    btnsBlock.addEventListener('click', (e) => {
        if(e.target.classList.contains('btn')) {
            btns.forEach(elem => {
                elem.classList.remove('active');
            })

            e.target.classList.add('active');
            // console.log(e.target);
        }

        if(e.target.classList.contains('btn1')) {
            sliderContent.style.left = '0px';
        }

        if(e.target.classList.contains('btn2')) {
            sliderContent.style.left = '-1200px';
        }

        if(e.target.classList.contains('btn3')) {
            sliderContent.style.left = '-2400px';
        }

        if(e.target.classList.contains('btn4')) {
            sliderContent.style.left = '-3600px';
        }
    })
})();


// create catigories
!(function(){
    const data = ['розетки', 'выключатели', 'коробки распаечные', 'изоляторы кабельные', 'втулки', 'рамки', 'провода', 'аксесуары', 'лампы', 'светильники',];
    let parent = document.querySelector('.categories');

    for(let i = 0; i < data.length; i++) {
        let item = document.createElement('div');
        item.classList.add('brend_item');
        parent.append(item);

        let itemBg = document.createElement('div');
        itemBg.style.background = `url(${WPJS.siteUrl}/assets/images/img/brand_item${i + 1}.png)`;
        itemBg.style.backgroundRepeat = 'no-repeat';
        itemBg.style.backgroundPosition = 'left 50%';
        itemBg.classList.add('brand_item_bg');
        item.append(itemBg);

        let itemText = document.createElement('div');
        itemText.classList.add('brand_text');
        itemText.textContent = data[i];
        itemBg.append(itemText);
    }
})();

// create brands block
!(function(){
    let brands = document.querySelector('.brands');

    for(let i = 1; i < 10; i++) {
        let item = document.createElement('div');
        item.classList.add('item');
        brands.append(item);

        let logo = document.createElement('img');
        logo.src = `${WPJS.siteUrl}/assets/images/img/brand_icon${i}.png`;
        item.append(logo);
    }
})();


// create comment items
!(function(){
    let parentItem = document.querySelector('.comments_content');

    for(let i = 0; i < userData.length; i++) {
        let item = document.createElement('div');
        item.classList.add('comment_item');
        parentItem.append(item);

        let itemHead = document.createElement('div');
        itemHead.classList.add('comment_item_head');
        item.append(itemHead);

        let itemImg = document.createElement('img');
        itemImg.classList.add('user_img');
        itemImg.src = `${WPJS.siteUrl}${userData[i].path}`;
        itemHead.append(itemImg);

        let userDate = document.createElement('div');
        itemHead.classList.add('user_data');
        itemHead.append(userDate);

        let userName = document.createElement('h4');
        userName.classList.add('user_name');
        userName.textContent = `${userData[i].name}`;
        userDate.append(userName);

        let date = document.createElement('p');
        date.textContent = `${userData[i].date}`;
        date.classList.add('date');
        userDate.append(date);

        let itemText = document.createElement('comment_item_text');
        itemText.textContent = `${userData[i].text}`;
        itemText.classList.add('comment_item_text');
        item.append(itemText);
    }
})();

// comment slider
!(function(){
    let btnParent = document.querySelector('.comments_btns');
    let sliderContent = document.querySelector('.comments_content');

    btnParent.addEventListener('click', (e) => {
        if(e.target.classList.contains('comment_btn')) {
            let btns = document.querySelectorAll('.comment_btn');

            btns.forEach(elem => elem.classList.remove('active_btn'));
            e.target.classList.add('active_btn');
        }

        if(e.target.classList.contains('comment_btn1')) {
            sliderContent.style.left = '0px';
        }

        if(e.target.classList.contains('comment_btn2')) {
            sliderContent.style.left = '-400px';
        }

        if(e.target.classList.contains('comment_btn3')) {
            sliderContent.style.left = '-800px';
        }
    })
})();