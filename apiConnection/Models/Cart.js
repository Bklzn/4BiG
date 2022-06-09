class Cart{
    constructor(){
        this.CookiesIds = new Array()
    }
    parseCart(obj){
        obj && Object.assign(this,obj)
    }

    addCookie(id){
        this.CookiesIds.push(id)
    }

    removeCookie(id){
        for( var i = 0; i < this.CookiesIds.length; i++){ 
            if(this.CookiesIds[i] == id){
                this.CookiesIds.splice(i, 1);
                break;
            }
        }
    }
}