const URL = "https://localhost:5001/api/"
var jwtoken = sessionStorage.getItem("jwt")

//-------------------------------------------------------------
//  Produkty
//-------------------------------------------------------------

function CreateProduct(Product){
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"product/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Product))

    return ok
}

function GetProductsFromCategory(category){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"product/"+category, false)
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
    var ok

    request.open('PUT', URL+"product/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Product))

    return ok
}

function DeleteProduct(id){
    var request = new XMLHttpRequest()
    var ok

    request.open('DELETE', URL+"product/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok
}

function AddPropertyToProduct(ProductId, PropertyId){
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"product/"+ProductId+"/"+PropertyId, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null)  request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok;
}

function DeletePropertyFromProduct(ProductId, PropertyId){
    var request = new XMLHttpRequest()
    var ok

    request.open('DELETE', URL+"product/"+ProductId+"/"+PropertyId, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok
}

//-------------------------------------------------------------
//  Właściwości produktu
//-------------------------------------------------------------

function CreateProperty(Property){
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"property/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Property))

    return ok
}

function GetProperties(){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"property/", false)
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
    var ok

    request.open('PUT', URL+"property/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Property))

    return ok
}

function DeleteProperty(id){
    var request = new XMLHttpRequest()
    var ok

    request.open('DELETE', URL+"property/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok
}

//-------------------------------------------------------------
//  Zamówienia
//-------------------------------------------------------------

function CreateOrder(Order){
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"order/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Order))

    return ok
}

function GetAllOrders(){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"order/", false)
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

    request.open('GET', URL+"order/"+id, false)
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
    var ok

    request.open('PUT', URL+"order/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Order))

    return ok
}

function UpdateDelivery(Delivery, id){
    var request = new XMLHttpRequest()
    var ok

    request.open('PUT', URL+"order/delivery"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Delivery))

    return ok
}

function DeleteOrder(id){
    var request = new XMLHttpRequest()
    var ok

    request.open('DELETE', URL+"order/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok
}

//-------------------------------------------------------------
//  Konto użytkownika
//-------------------------------------------------------------

function RegisterUser(UserReg){
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"account/register/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(UserReg))

    return ok
}

function LoginUser(UserLog){
    var data
    var request = new XMLHttpRequest()
    var ok

    request.open('POST', URL+"account/login/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = JSON.parse(this.response)
            sessionStorage.setItem("UserId", data.UserId)
            sessionStorage.setItem("jwt", data.Token)
            jwtoken = sessionStorage.getItem("jwt")
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(UserLog))

    return ok
}

function GetUserData(){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"account/", false)
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

function UpdateUser(UserReg){
    var request = new XMLHttpRequest()
    var ok

    request.open('PUT', URL+"account/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(UserReg))
    return ok
}

//-------------------------------------------------------------
//  Ciastka
//-------------------------------------------------------------

function CreateCookie(Cookie){
    var request = new XMLHttpRequest()
    var data

    request.open('POST', URL+"cookie/", false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            data = this.response
        }
        else{
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Cookie))

    return data
}

function GetCookiesFromOrder(CookieId){
    var data;
    var request = new XMLHttpRequest()

    request.open('GET', URL+"cookie/"+CookieId, false)
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

    request.open('GET', URL+"cookie/favorite"+UserId, false)
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
    var ok

    request.open('PUT', URL+"cookie/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send(JSON.stringify(Cookie))

    return ok
}

function DeleteCookie(id){
    var request = new XMLHttpRequest()
    var ok

    request.open('DELETE', URL+"order/"+id, false)
    request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    if(jwtoken != null) request.setRequestHeader('Authorization', 'Bearer ' + jwtoken);

    request.onload = function () {
        if(request.status >= 200 && request.status < 400){
            ok = true
        }
        else{
            ok = false
            console.log("Error: "+request.status+"\n"+this.response)
        }
    }

    request.send()

    return ok
}