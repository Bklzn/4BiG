import * as THREE from 'three';
import { OrbitControls } from '../three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '../three/examples/jsm/loaders/GLTFLoader.js';
import * as dat from '../three/examples/jsm/libs/lil-gui.module.min.js';
import { RectAreaLightHelper } from '../three/examples/jsm/helpers/RectAreaLightHelper.js';
import { RectAreaLightUniformsLib } from '../three/examples/jsm/lights/RectAreaLightUniformsLib.js';

let scene,camera,renderer,controls;

scene = new THREE.Scene();
camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,0.01,10000);
renderer = new THREE.WebGLRenderer({
    antiailas: true,
    alpha: true
});
renderer.setSize(window.innerWidth-1,window.innerHeight);
document.body.appendChild( renderer.domElement);
controls = new OrbitControls( camera, renderer.domElement );

//Objects
const springles = new THREE.Object3D();
const icing = new THREE.Object3D();
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
var choco = new THREE.Object3D();
var berries = new THREE.Object3D();;
var ic = new THREE.Object3D();
load('../l_Cookie/obj.gltf',cookie);
load('../Choco/obj.gltf',choco);
load('../Berries/obj.gltf',berries);
load('../straw_ice/obj.gltf',ic);
springles.add(choco,berries);
icing.add(ic);


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
    springles,
    amb,
    front,
    // h,h2,h3,
    top,back,left,right
    );
controls.update();

//Debug
const gui = new dat.GUI();
const spr= gui.addFolder("sprinkles");
var c = {isSetCH:true,isSetB:true,icing:true,x:0,y:0,z:0};
spr.add(c,"isSetCH");
spr.add(c,"isSetB");
spr.add(c,"icing");
gui.add(left.position,"x",-10,10,.001);
gui.add(left.position,"y",-10,10,.001);
gui.add(left.position,"z",-10,10,.001);


var Ppos=springles.position.y;
function load(path, pivot){
    var obj;
    loader.load(path, function(gltf){
        obj= gltf.scene;
        pivot.add(obj);
        console.log(path);
        console.log(gltf);
    },function(error){
        // if(error) console.error(error);
    });
}
const loop = () =>{
    requestAnimationFrame(loop);

    cookie.rotation.y+=.001;
    springles.rotation.y+=.001;
    icing.rotation.y+=.001;
    left.lookAt(0,0,0);
    // console.log(camera.position);
    if(c.isSetCH)     springles.add(choco);
    else springles.remove(choco);
    if(c.isSetB)     springles.add(berries);
    else springles.remove(berries);
    if(c.icing){springles.position.y=Ppos+.02;scene.add(icing);}
    else{springles.position.y=Ppos;scene.remove(icing);}
    controls.update();
    renderer.render(scene,camera);
}
loop();