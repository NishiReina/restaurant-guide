

// const buttonOpen = document.getElementById('modalOpen');
// const modal = document.getElementById('reserve_modal');
// const buttonClose = document.getElementsByClassName('modalClose')[0];

// // ボタンがクリックされた時
// buttonOpen.addEventListener('click', modalOpen);
// function modalOpen() {
//   modal.style.display = 'block';
// }

// // バツ印がクリックされた時
// buttonClose.addEventListener('click', modalClose);
// function modalClose() {
//   modal.style.display = 'none';
// }
const modal = document.getElementById('reserve_modal');
// // モーダルコンテンツ以外がクリックされた時
// window.addEventListener('click', outsideClose);
// function outsideClose(e) {
//   if (e.target != modal) {
//     modal.style.display = 'none';
//   }
// }

function openModal(shop_id, date){
    console.log(date);
    split_date= date.split('/');
    now = new Date();
    year = now.getFullYear();
    const reserve_shop = document.getElementById('shop_id');
    const reserve_date = document.getElementById('date');
    reserve_shop.value = shop_id
    reserve_date.value= year + '-' + split_date[0] + '-' + split_date[1];

    modal.style.display = 'flex';
}