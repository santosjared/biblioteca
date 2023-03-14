let tipoU = document.getElementById('name');
let idUser = document.getElementById('idUser')
tipoU.addEventListener('change',function(){
    if(tipoU.value=='bi')
    {
        idUser.innerHTML=`<div class="form-group">
        <label for="ru">Item</label>
        <input id="ru" type="text" class="form-control" name="tipoUser" placeholder="Item">
      </div>` 
    }
    if(tipoU.value=='le')
    {
        idUser.innerHTML=`<div class="form-group">
        <label for="item">R.U.</label>
        <input id="item" type="text" class="form-control" name="tipoUser" placeholder="RU">
      </div>` 
    }
    if(tipoU.value=='0')
    {
        idUser.innerHTML=''
    }
});
