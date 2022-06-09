import * as THREE from 'three';
import { OrbitControls } from '../threejs/three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '../threejs/three/examples/jsm/loaders/GLTFLoader.js';
import * as dat from '../threejs/three/examples/jsm/libs/lil-gui.module.min.js';
import { RectAreaLightHelper } from '../threejs/three/examples/jsm/helpers/RectAreaLightHelper.js';
import { RectAreaLightUniformsLib } from '../threejs/three/examples/jsm/lights/RectAreaLightUniformsLib.js';

let scene,camera,renderer,controls,div;

div = document.getElementById("3D");
scene = new THREE.Scene();
camera = new THREE.PerspectiveCamera(40,div.clientWidth/div.clientWidth,0.01,10000);
renderer = new THREE.WebGLRenderer({
    antiailas: true,
    alpha: true
});
renderer.setSize(div.clientWidth, div.clientWidth);
div.style.backgroundColor = "rgba(0, 0, 0, 0.05)";
div.appendChild( renderer.domElement);
controls = new OrbitControls( camera, renderer.domElement );

//Objects
const springles = new THREE.Object3D();
const loader = new GLTFLoader();

//Light
RectAreaLightUniformsLib.init();
const amb = new THREE.AmbientLight(new THREE.Color('rgb(255,255,255)'),.35);
const front = new THREE.SpotLight(new THREE.Color('rgb(255,255,255)'),.25);
const top = new THREE.RectAreaLight(new THREE.Color('rgb(255,255,255)'),1,2,2);
const back = new THREE.RectAreaLight(new THREE.Color('rgb(255,255,255)'),1,2,2);
const left = new THREE.RectAreaLight(new THREE.Color('rgb(255,255,255)'),1,2,2);
const right = new THREE.RectAreaLight(new THREE.Color('rgb(255,255,255)'),1,2,2);
const h = new RectAreaLightHelper(right);
const h2 = new THREE.PointLightHelper(front,.1);
const h3 = new RectAreaLightHelper(back);

//Cookie
var cookie = new THREE.Object3D();
var icing = new THREE.Object3D();
var choco = new THREE.Object3D();
var berries = new THREE.Object3D();

//Set
top.position.set(0,.55,0);
top.lookAt( 0, 0, 0);
back.position.set(0,0,-1);
back.lookAt( 0, 0, 0);
left.position.set(-1,0,0);
left.lookAt( 0, 0, 0);
right.position.set(1,0,0);
right.lookAt( 0, 0, 0);
front.position.set(-.625,.25,.5);
camera.position.set(.06,.9,2.3);
scene.add(
    cookie,
    icing,
    springles,
    amb,
    front,
    // h,h2,h3,
    top,back,left,right
    );
controls.update();
controls.enabled = false;

//Debug
// const gui = new dat.GUI();
var c = {isSetCH:false,isSetB:false,icing:false,x:0,y:0,z:0};



function load(path, pivot){
    var obj;
    loader.load(path, function(gltf){
        obj= gltf.scene;
        obj.name=path;
        pivot.add(obj);
        console.log(path);
        console.log(pivot);
    },function(error){
        // if(error) console.error(error);
    });
}
if (document.body.addEventListener){
    document.body.addEventListener('click',btnHandler,false);
}
else{
    document.body.attachEvent('onclick',btnHandler);//for IE
}

function btnHandler(e){
    e = e || window.event;
    var target = e.target || e.srcElement;
    if (target.className.match("sdw3d"))
    {
        var data=target.getAttribute("data-sdw3d").split(" ");
        if(data[1]=="cookie_base"){
            cookie.clear();
            load(data[2],cookie);
            CookieProduct.setBase(data[0]);
        }
        else if(data[1]=="upgraded_base"){
            icing.clear();
            if(icing.name!=data[2]) {
                load(data[2],icing);
                CookieProduct.setUprgadedBase(data[0]);
                icing.name=data[2];
                springles.position.y=icing.position.y+.02;
            }
            else{
                icing.name=null;
                CookieProduct.setUprgadedBase(0);
                springles.position.y=icing.position.y;
            }
        }
        else if(data[1]=="fruits"){
            for(var i=0;i<springles.children.length;i++){
                if(springles.children[i].name==data[2]){
                    springles.remove(springles.children[i]);
                    CookieProduct.removeFruit(data[0]);
                    productList();
                    return;
                }
            }
            load(data[2],springles);
            CookieProduct.addFruit(data[0]);
        }
    }
    productList();
}
document.getElementById("DodajDoKoszyka").addEventListener("click",()=>{
    CookieProduct.setNameDesc(document.getElementById("nazwaCiastka").value, document.getElementById("opisCiastka").value);
    var id=CreateCookie(CookieProduct);
    if(id!=null){
        if(sessionStorage.getItem("cart")==null){
            var order = new Cart()
        }
        else{
            var order = new Cart()
            order.parseCart(JSON.parse(sessionStorage.getItem("cart")))
        }
        order.addCookie(id)
        sessionStorage.setItem("cart",JSON.stringify(order));
        window.location.href ='cart.html';
        return;
    }
    console.log(ok);
})
const handleResize = () =>{
    const {innerWidth, innerHeight} = window;
    renderer.setSize(div.clientWidth,div.clientWidth);
    camera.aspect = div.clientWidth / (div.clientWidth);
    camera.updateProjectionMatrix();
};
const loop = () =>{
    requestAnimationFrame(loop);
    cookie.rotation.y+=.001;
    springles.rotation.y+=.001;
    icing.rotation.y+=.001;
    renderer.render(scene,camera);
}
handleResize();
loop();