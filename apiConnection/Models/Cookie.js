class Cookie{
    constructor(){
        this.Name = ""
        this.Description = ""
	    this.Favorite = false
        this.BaseId = 0
        this.UpgradedBaseId = 0
        this.FruitsIds = new Array()
    }
    setNameDesc(Name, Description){
        this.Name=Name
        this.Description=Description
    }
    switchFav(){
        this.Favorite=!this.Favorite
    }

    setBase(id){
        this.BaseId= id
    }
    setUprgadedBase(id){
        this.UpgradedBaseId = id
    }
    addFruit(id){
        this.FruitsIds.push(id)
    }

    removeFruit(id){
        for( var i = 0; i < this.FruitsIds.length; i++){ 
            if(this.FruitsIds[i] === id){
                this.FruitsIds.splice(i, 1);
                break;
            }
        }
    }
}