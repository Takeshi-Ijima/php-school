// function button_click(){
//     alert('クリック');
// }
// function button_check(){
//     var name = document.getElementById('name_id').value;
        // document.getElementById name_id
        //
//
//     if(name === ''){
//         alert('名前が入ってません');
//     }else{
//         document.getElementById('write').innerHTML = name;
//         alert('入力された名前は'+name+'です。');
//     }
// }
function button_click(){
    alert('Hi PHP');
}
function button_check(){
    var nameElement = document.getElementById('name_id');
    // document.getElementById
        //
    var name = nameElement.value;
    console.log(name);
    if(name === ''){
        alert('名前が入力されてません');
    }else{
        var writeElement = document.getElementById('write')
        writeElement.innerHTML = name;
        alert('入力された名前は'+name+'だよ');
    }
}
