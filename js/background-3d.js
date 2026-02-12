// Three.js Background Animation
document.addEventListener('DOMContentLoaded', () => {
    // Check if container already exists
    if (document.getElementById('canvas-container')) return;

    const container = document.createElement('div');
    container.id = 'canvas-container';
    container.style.position = 'fixed';
    container.style.top = '0';
    container.style.left = '0';
    container.style.width = '100%';
    container.style.height = '100%';
    container.style.zIndex = '0';
    container.style.opacity = '1';
    container.style.pointerEvents = 'none';
    document.body.prepend(container);

    const scene = new THREE.Scene();

    // Camera setup
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 30;

    // Renderer setup
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    // --- Dot Grid Wave ---
    const gridCountX = 50;
    const gridCountZ = 50;
    const spacing = 1.5;
    const totalPoints = gridCountX * gridCountZ;

    const positions = new Float32Array(totalPoints * 3);
    const geometry = new THREE.BufferGeometry();

    // Initial positions
    for (let i = 0; i < gridCountX; i++) {
        for (let j = 0; j < gridCountZ; j++) {
            const index = (i * gridCountZ + j) * 3;
            positions[index] = (i - gridCountX / 2) * spacing;     // x
            positions[index + 1] = 0;                               // y
            positions[index + 2] = (j - gridCountZ / 2) * spacing; // z
        }
    }

    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

    const material = new THREE.PointsMaterial({
        color: 0x4285F4, // Google Blue
        size: 0.12,
        transparent: true,
        opacity: 0.6
    });

    const dots = new THREE.Points(geometry, material);
    dots.position.y = -5;
    dots.rotation.x = 0.2; // Slight tilt
    scene.add(dots);

    // Mouse interaction
    let mouseX = 0;
    let mouseY = 0;

    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX - windowHalfX);
        mouseY = (event.clientY - windowHalfY);
    });

    // Handle Resize
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    // Animation Loop
    let time = 0;
    const animate = () => {
        time += 0.015;

        // Wave Animation
        const posAttr = dots.geometry.attributes.position;
        for (let i = 0; i < gridCountX; i++) {
            for (let j = 0; j < gridCountZ; j++) {
                const index = (i * gridCountZ + j) * 3;

                // Multi-layered sine waves for organic motion
                const x = posAttr.array[index];
                const z = posAttr.array[index + 2];

                const wave1 = Math.sin(x * 0.15 + time) * 1.5;
                const wave2 = Math.sin(z * 0.15 + time * 0.8) * 1.5;
                const wave3 = Math.sin((x + z) * 0.05 + time * 0.5) * 1.0;

                posAttr.array[index + 1] = wave1 + wave2 + wave3;
            }
        }
        posAttr.needsUpdate = true;

        // Interactive tilting
        dots.rotation.z = mouseX * 0.00005;
        dots.rotation.x = 0.2 + (mouseY * 0.00005);

        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    };

    animate();
});
