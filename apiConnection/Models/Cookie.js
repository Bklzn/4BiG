class Cookie{
    constructor(Name, Description, Favorite){
        this.Name = Name
        this.Description = Description
	    this.Favorite = Favorite
        this.ProductsIds = new Array()
    }

    addProduct(id){
        this.ProductsIds.push(id)
    }

    removeProduct(id){
        for( var i = 0; i < this.ProductsIds.length; i++){ 
            if(this.ProductsIds[i] === id){
                this.ProductsIds.splice(i, 1);
                break;
            }
        }
    }
}