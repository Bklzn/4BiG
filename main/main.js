import * as THREE from 'three';

import { OrbitControls } from '../three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '../three/examples/jsm/loaders/GLTFLoader.js';
import * as dat from '../three/examples/jsm/libs/lil-gui.module.min.js';

let scene,camera,renderer,controls;

scene = new THREE.Scene();
camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,0.01,10000);
renderer = new THREE.WebGLRenderer({
    antiailas: true,
    alpha: true
});
renderer.setSize(window.innerWidth,window.innerHeight);
document.body.appendChild( renderer.domElement);
controls = new OrbitControls( camera, renderer.domElement );

//Objects
const pivot = new THREE.Object3D();
const sprinkles = new THREE.Object3D();
const loader = new GLTFLoader();
const sqGeo = new THREE.BoxGeometry(.3,.3,.3);
const sqMat = new THREE.MeshPhongMaterial({
    color:new THREE.Color('hsl(0,100%,50%)'),
    shininess:40
});
const squere = new THREE.Mesh(sqGeo,sqMat);
const squere2= new THREE.Mesh(sqGeo,sqMat);
const squere3= new THREE.Mesh(sqGeo,sqMat);
const squere4= new THREE.Mesh(sqGeo,sqMat);
const squere5= new THREE.Mesh(sqGeo,sqMat);
sprinkles.add(squere,squere2,squere3,squere4,squere5);

const fGeo = new THREE.BoxGeometry(500,.1,500);
const fMat = new THREE.MeshPhongMaterial({
    color:new THREE.Color('rgb(41, 41, 41)'),
    shininess:20
});
const floor = new THREE.Mesh(fGeo,fMat);

//Light
const light = new THREE.PointLight(new THREE.Color('rgb(255,255,255)'),1);
// const light2 = new THREE.PointLight(new THREE.Color('rgb(255,255,255)'),.5);

//Debug
const gui = new dat.GUI();
const axes =  new THREE.AxesHelper(50).setColors(0xA10000,0x00A100,0x0000A1);
const axesP =  new THREE.AxesHelper(50);
const coo= gui.addFolder("cookie");
const spr= gui.addFolder("sprinkles");
pivot.add(axesP);
var options = {speed: 1,isSet:false};
coo.add(options,"speed",0,100,0.01);
spr.add(options,"isSet");
spr.add(sprinkles.position,"y",-2,2,0.001).name('sprY');
spr.add(squere4.position,"x",-3,3,0.001);
spr.add(squere4.position,"y",-3,3,0.001);
spr.add(squere4.position,"z",-3,3,0.001);
spr.add(squere4.rotation,"x",0,Math.PI*2,0.001).name("ROTx");
spr.add(squere4.rotation,"y",0,Math.PI*2,0.001).name("ROTy");
spr.add(squere4.rotation,"z",0,Math.PI*2,0.001).name("ROTz");


//Cookie
var cookie;
loader.load('../low_poly_cookie/scene.gltf', function(gltf){
    cookie = gltf.scene;
    pivot.add(cookie);
    scene.add(pivot);
    console.log(gltf);
    cookie.scale.set(50,50,50);
    cookie.rotation.x=0.53;
    // cookie.position.y=3;
    cookie.add(axes);
},function(xhr){
    console.log((xhr.loaded/xhr.total*100)+"% loaded");
},function(error){
    console.error(error);
});

//Set
sprinkles.position.y=0.4;
squere.position.set(2.1,-.2,1,7);
squere.rotation.set(.5,.7,0);
squere2.position.set(1,-.1,-1.3);
squere2.rotation.set(.6,.4,1.4);
squere3.position.set(-1.89,-.27,-.86);
squere3.rotation.set(2,0,0);
squere4.position.set(-.57,-.15,2.38);
squere4.rotation.set(0.46,0.923,0.537);
squere5.rotation.set(1,1,1);
camera.position.set(10,5,5);
floor.position.y-=1;
pivot.position.y=0;
scene.add(
    floor,
    light
    );
controls.update();


const loop = () =>{
    requestAnimationFrame(loop);
    pivot.rotation.y+=options.speed/1000;
    sprinkles.rotation.y+=options.speed/1000;
    if(options.isSet)     scene.add(sprinkles);
    else scene.remove(sprinkles);
    light.position.set(camera.position.x,camera.position.y,camera.position.z);
    controls.update();
    renderer.render(scene,camera);
}
loop();