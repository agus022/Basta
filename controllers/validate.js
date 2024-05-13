var ventFrame
var ventFrame1

function users(action , id){
    if (typeof(id)== "undefined"){///isset de php , dice que tipo de datos es ese componenete y si no existe retorna undefined 
        id=0;
        switch (action) {
            case "formNew":
                break;
            case "insert":
                break;
            case "delete":
                break;
            case "update":
                break;
            case "valiForm":
                break;
            default:
                break;
        }
    }

}