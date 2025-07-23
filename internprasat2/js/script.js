// เอฟเฟกต์การเลื่อน
document.querySelectorAll('.nav-links a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        window.scrollTo({
            top: targetElement.offsetTop - 20,
            behavior: 'smooth'
        });
    });
});

// ระบบแท็บ
document.addEventListener('DOMContentLoaded', function() {
    // ตรวจสอบว่ามีแท็บในหน้า
    const tabContainers = document.querySelectorAll('.tab-container');
    
    tabContainers.forEach(container => {
        const tabs = container.querySelectorAll('.tab');
        const tabContents = container.querySelectorAll('.tab-content');
        
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                // ซ่อนเนื้อหาแท็บทั้งหมด
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });
                
                // ลบคลาส active จากแท็บทั้งหมด
                tabs.forEach(t => {
                    t.classList.remove('active');
                });
                
                // แสดงเนื้อหาแท็บที่เลือก
                tabContents[index].classList.add('active');
                tab.classList.add('active');
            });
        });
        
        // เปิดแท็บแรกโดยค่าเริ่มต้น
        if (tabs.length > 0) {
            tabs[0].click();
        }
    });
});

// ระบบ WYSIWYG Editor สำหรับผู้ดูแลระบบ
if (document.getElementById('content-editor')) {
    ClassicEditor
        .create(document.querySelector('#content-editor'))
        .catch(error => {
            console.error(error);
        });
}