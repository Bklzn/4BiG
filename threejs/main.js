import * as THREE from 'three';
import { OrbitControls } from '../threejs/three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '../threejs/three/examples/jsm/loaders/GLTFLoader.js';
import * as dat from '../threejs/three/examples/jsm/libs/lil-gui.module.min.js';
import { RectAreaLightHelper } from '../threejs/three/examples/jsm/helpers/RectAreaLightHelper.js';
import { RectAreaLightUniformsLib } from '../threejs/three/examples/jsm/lights/RectAreaLightUniformsLib.js';
import { TubeGeometry } from 'three';

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
// load('../threejs/models/Choco/obj.gltf',choco);
// load('../threejs/models/Berries/obj.gltf',berries);
// springles.add(choco,berries);

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
        if(data[0]=="cookie_base"){
            cookie.clear();
            load(data[1],cookie);
        }
        else if(data[0]=="upgraded_base"){
            icing.clear();
            if(icing.name!=data[1]) {
                load(data[1],icing);
                icing.name=data[1];
                springles.position.y=icing.position.y+.02;
            }
            else{
                icing.name=null;
                springles.position.y=icing.position.y;
            }
        }
        else if(data[0]=="fruits"){
            for(var i=0;i<springles.children.length;i++){
                if(springles.children[i].name==data[1]){
                    console.log("????????????????????");
                    springles.remove(springles.children[i]);
                    return;
                }
            }
            load(data[1],springles);
        }
    }
}
const loop = () =>{
    requestAnimationFrame(loop);
    cookie.rotation.y+=.001;
    springles.rotation.y+=.001;
    icing.rotation.y+=.001;
    controls.update();
    renderer.render(scene,camera);
}
loop();