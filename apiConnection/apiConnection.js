const URL = "https://localhost:5001/api/"
var jwtoken = window.sessionStorage.getItem("jwt")

//-------------------------------------------------------------
//  Produkty
//-------------------------------------------------------------

function CreateProduct(Product){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"product/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Product))
}

function GetProductsFromCategory(category){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"product/"+category, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function UpdateProduct(Product, id){
    var request = new XMLHttpRequest()

    request.open('PUT', URL+"product/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Product))
}

function DeleteProduct(id){
    var request = new XMLHttpRequest()

    request.open('DELETE', URL+"product/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}

function AddPropertyToProduct(ProductId, PropertyId){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"product/"+ProductId+"/"+PropertyId, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null)  request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}

function DeletePropertyFromProduct(ProductId, PropertyId){
    var request = new XMLHttpRequest()

    request.open('DELETE', URL+"product/"+ProductId+"/"+PropertyId, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}

//-------------------------------------------------------------
//  Właściwości produktu
//-------------------------------------------------------------

function CreateProperty(Property){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"property/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Property))
}

function GetProperties(){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"property/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function UpdateProperty(Property, id){
    var request = new XMLHttpRequest()

    request.open('PUT', URL+"property/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Property))
}

function DeleteProperty(id){
    var request = new XMLHttpRequest()

    request.open('DELETE', URL+"property/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}

//-------------------------------------------------------------
//  Zamówienia
//-------------------------------------------------------------

function CreateOrder(Order){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"order/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Order))
}

function GetAllOrders(){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"order/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function GetUserOrders(id){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"order/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function UpdateOrder(Order, id){
    var request = new XMLHttpRequest()

    request.open('PUT', URL+"order/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Order))
}

function UpdateDelivery(Delivery, id){
    var data;
    var request = new XMLHttpRequest()

    request.open('PUT', URL+"order/delivery"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Delivery))
}

function DeleteOrder(id){
    var request = new XMLHttpRequest()

    request.open('DELETE', URL+"order/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}

//-------------------------------------------------------------
//  Konto użytkownika
//-------------------------------------------------------------

function RegisterUser(UserReg){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"account/register/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){

        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(UserReg))
}

function LoginUser(UserLog){
    var data
    var request = new XMLHttpRequest()

    request.open('POST', URL+"account/login/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            console.log("login");
            data = this.response
            sessionStorage.setItem("jwt", data)
        }
        else{
            console.log("login2");
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(UserLog))
}

//-------------------------------------------------------------
//  Ciastka
//-------------------------------------------------------------

function CreateCookie(Cookie){
    var request = new XMLHttpRequest()

    request.open('POST', URL+"cookie/", true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Cookie))
}

function GetCookiesFromOrder(CookieId){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"cookie/"+CookieId, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function GetUserFavoriteCookies(UserId){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"cookie/favorite"+UserId, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return data;
}

function UpdateCookie(Cookie, id){
    var request = new XMLHttpRequest()

    request.open('PUT', URL+"cookie/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Order))
}

function DeleteCookie(id){
    var request = new XMLHttpRequest()

    request.open('DELETE', URL+"order/"+id, true)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()
}