<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Customization</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="images/headlogo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Red+Hat+Display:wght@500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        #model-container {
            width: 100%;
            height: 500px;
            border: 2px solid gray;
            background-color: lightgray;
            overflow: hidden;
            position: relative;
        }

        #loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            color: gray;
        }
    </style>
</head>

<body class="bg-gray-100">
<nav class="bg-black shadow-md top-0 left-0 w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-2">
                <div class="flex-1 flex justify-start">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="index.php" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
                        <a href="#about" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
                        <a href="#threats" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Services</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="text-center">
                        <img src="images/logo1.png" alt="" width="200px" class="h-20">
                    </div>
                </div>
                <div class="flex-1 flex justify-end">
                    <div class="hidden md:flex space-x-4 p-2">
                        <a href="contacts.html" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Contacts</a>
                        <a href="order_history.php" class="text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-sm hover:underline">Order History</a>
                        <a href="logout.php"><button type="submit" class="py-2 px-4 border-2 border-white bg-gradient-to-r from-yellow-500 to-orange-600 text-white py-2 rounded-md shadow-lg hover:from-yellow-600  hover:to-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Logout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center py-10" style="background-image: url(images/bg.png);">
        <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-6 " >
            <h2 class="text-xl font-semibold mb-4">Customize Your Model</h2>
            <div id="model-container">
                <div id="loader">Loading model...</div>
            </div>

            <div class="flex justify-around items-center mt-4">
                <div class="flex items-center">
                    <label for="colorPicker" class="mr-2">Choose Color:</label>
                    <input type="color" id="colorPicker" class="border rounded" />
                </div>
                <div class="flex items-center">
                    <label for="imageUpload" class="mr-2">Upload Image:</label>
                    <input type="file" id="imageUpload" class="border rounded" accept="image/*" />
                </div>
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" id="resetBtn">Reset</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" id="saveBtn">Save</button>
            </div>

            <form id="customizationForm" class="mt-6" action="customizationProcessOrder.php" method="POST" enctype="multipart/form-data">
                <div class="flex flex-col mb-4">
                    <label for="size" class="mb-2">Size:</label>
                    <select id="size" name="size" class="border rounded p-2" required>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">X Large</option>
                        <option value="XXL">XX Large</option>
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="frontText" class="mb-2">Front Text (optional):</label>
                    <input type="text" id="frontText" name="frontText" class="border rounded p-2" placeholder="Enter text for the front" />
                </div>
                <div class="flex flex-col mb-4">
                    <label for="backText" class="mb-2">Back Text (optional):</label>
                    <input type="text" id="backText" name="backText" class="border rounded p-2" placeholder="Enter text for the back" />
                </div>
                <div class="flex flex-col mb-4">
                    <label for="fileUpload" class="mb-2">Upload Customized Product:</label>
                    <input type="file" id="fileUpload" name="fileUpload" class="border rounded p-2" accept=".glb,.gltf" required />
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit Order</button>
            </form>

        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/build/three.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/exporters/GLTFExporter.js"></script>
    <script>
        const container = document.getElementById('model-container');
        const loaderElement = document.getElementById('loader');

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true });

        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);

        const addLights = () => {
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambientLight);

            const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
            directionalLight.position.set(5, 5, 5);
            scene.add(directionalLight);

            const directionalLight2 = new THREE.DirectionalLight(0xffffff, 1);
            directionalLight2.position.set(-5, -5, -5);
            scene.add(directionalLight2);
        };

        let model;
        const loadModel = () => {
            const loader = new THREE.GLTFLoader();
            loader.load('models/tshirt.glb', (gltf) => {
                model = gltf.scene;
                model.scale.set(0.5, 0.5, 0.5);
                scene.add(model);

                const box = new THREE.Box3().setFromObject(model);
                const center = box.getCenter(new THREE.Vector3());
                model.position.set(-center.x, -center.y, 0);
                model.position.y += model.scale.y * (box.max.y - box.min.y) / 5;

                model.traverse((child) => {
                    if (child.isMesh) {
                        child.material = new THREE.MeshStandardMaterial({
                            color: 0xffffff,
                            metalness: 0.5,
                            roughness: 0.5
                        });
                    }
                });

                camera.position.z = Math.max(box.max.x, box.max.y, box.max.z) * 1.3;
                loaderElement.style.display = 'none';
            }, undefined, (error) => {
                console.error('Error loading model:', error);
                loaderElement.textContent = 'Failed to load model.';
            });
        };

        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.25;
        controls.screenSpacePanning = false;
        controls.maxPolarAngle = Math.PI / 2;

        const colorPicker = document.getElementById('colorPicker');
        colorPicker.addEventListener('input', (event) => {
            const selectedColor = event.target.value;
            if (model) {
                model.traverse((child) => {
                    if (child.isMesh) {
                        child.material.color.set(selectedColor);
                    }
                });
            }
        });

        const imageUpload = document.getElementById('imageUpload');
        imageUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const textureLoader = new THREE.TextureLoader();
                    const texture = textureLoader.load(e.target.result, () => {
                        if (model) {
                            model.traverse((child) => {
                                if (child.isMesh) {
                                    child.material.map = texture;
                                    child.material.needsUpdate = true;
                                }
                            });
                        }
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('resetBtn').addEventListener('click', () => {
            colorPicker.value = '#ffffff';
            if (model) {
                model.traverse((child) => {
                    if (child.isMesh) {
                        child.material.color.set(0xffffff);
                        child.material.map = null;
                        child.material.needsUpdate = true;
                    }
                });
            }
        });

        document.getElementById('saveBtn').addEventListener('click', () => {
            const exporter = new THREE.GLTFExporter();
            exporter.parse(scene, (result) => {
                const blob = new Blob([result], { type: 'application/octet-stream' });
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'custom_model.glb';
                link.click();
            }, { binary: true });
        });

        window.addEventListener('resize', () => {
            const width = container.clientWidth;
            const height = container.clientHeight;
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        });

        const animate = () => {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        };

        addLights();
        loadModel();
        animate();
    </script>
</body>

</html>
