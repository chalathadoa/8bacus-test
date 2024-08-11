const jobData = {
    1: {
        title: 'Frontend Developer',
        description: '',
        duties: [
            'Develop, Upgrade and Deploy high-quality Frontend.',
            'Design, develop and test UI for mobile and web applications.',
            'Optimize the app for maximum speed.',
            'Collaborate with back-end developers and UI/UX designers to improve usability.'
        ],
        qualifications: [
            'Minimum 2 years experience in web front application development using HTML, CSS, JavaScript, and JQuery.',
            'Willing to work with tight deadlines.',
            'Can use CSS frameworks such as Bootstrap, Material Ui, or Foundation.',
            'Stay up-to-date on emerging technologies.',
            'Communication skills fluent in English is a must (Oral and written).',
            'Understanding of version control systems such as GIT will be an advantage.'
        ]
    },
    2: {
        title: 'Backend Developer',
        description: '',
        duties: [
            'Take responsibility for the tech development of the product',
            'Work closely with the founders to define and build the core product',
            'Participate in the organization/ planning of development resources and schedules',
            'Organize and facilities stand-up meetings, reviews, retrospectives, sprint and release planning, demos, and other related meetings with stakeholders',
            'Appetite for learning new things and improving existing ones, and cultivating that same appetite in the development team'
        ],
        qualifications: [
            'More than 1 year experience in web application development using Laravel framework.',
            'Have a good understanding in API and its related security',
            'Experienced in at least one third party integration project (better if payment gateway third party)',
            'Knowledge of version control systems such as GIT',
            'Knowledge of web scraping',
            'Have a strong personality and able to work under pressure till meet deadlines',
            'Amenable to work onsite in Makati City',
            ' Can start as soon as possible'
        ]
    },
    3: {
        title: 'UI/UX Designer',
        description: 'The UI/UX Designer will be working closely with the design and development teams with the primary objective of designing next-generation responsive websites, apps, and other mobile interfaces across multiple platforms such as iOS, Android, Windows, and mobile web. He/she will provide direction to the technical team members from conception to final design and will also be responsible for establishing UI/UX design standards, guidelines, and strategies that will serve as the foundation for creating cohesive experiences.',
        duties: [
            'Design the information architecture and interaction models for projects which may include websites, mobile experiences, or other touch-points.',
            'Collaborate with cross-functional teams throughout the design process.',
            'Execute all visual design stages from concept to final hand-off to developers.',
            'Present and defend designs and key deliverables to peers and executive-level stakeholders.',
            'Create wireframes, storyboards, user flows, process flows and site maps to effectively communicate interaction and design ideas.',
            'Lead regular design reviews and participate in or conduct usability tests.',
            'Identify and troubleshoot UX problems.',
            'Conduct user research and evaluate user feedback.',
            'Keep abreast of the latest standards, changes, and trends in the UI, UX, and mobile design fields.',
            'Provide strategic thinking and leadership.',
            'Able to lead teams and work on projects simultaneously with tight deadlines.',
            'Able to understand how to apply business strategy and branding issues with user needs and technological constraints.',
            'Solid understanding of common software project management and development practices.'
        ],
        qualifications: [
            'With 3 to 5 working experience',
            'At least 1 Year of working experience in the online gaming industry.',
            'Experience in end-to-end interface design in software/web technologies.',
            'Proficiency in Figma (is a MUST), Photoshop, Illustrator, or other design tools.',
            'Highly skilled in visual design including UI, Icon, Illustration, and Prototyping across different platforms.',
            'The candidate must be able to tell the difference between UI and UX design',
            'Can start as soon as possible',
            'Amenable to work ONSITE in Makati City'
        ]
    },
    4: {
        title: 'Sales Support Specialist',
        description: 'We are seeking a highly qualified Sales Support Specialist to join our team. The ideal candidate should possess extensive experience in sales and customer service, with a deep understanding of best practices in both areas. Responsible for administrative duties to help the work of the sales team. You must respond to customers questions, resolve their complaints, and maintain sales-related databases on time.',
        duties: [
            'Providing valuable support to our sales team and effectively responding to customer and',
            'Manage sales tracking tools and report on important information',
            'Developing and monitoring performance indicators',
            'Performing data entry duties in regard to metrics, sales figures, and other key data',
            'Communicating sales projects to marketing, evaluating and seeing through the',
            'completion of all marketing request forms and proof, detailed information, and support to',
            'ensure sales and marketing success together.',
            'Liaise with account managers to develop specific sales strategies'
        ],
        qualifications: [
            'Proven work experience as a Sales support specialist or Sales support associate',
            'Hands-on experience with ERP and CRM systems',
            'Proficiency with MS Office Suite, particularly MS Excel',
            'In-depth understanding of sales principles and customer service practices',
            'Excellent communication skills',
            'Analytical and multitasking skills',
            'Teamwork and motivational skills',
            'Keen to details',
            'BS degree in Marketing or associates degree in a relevant field a plus'
        ]
    },
    5: {
        title: 'Backend Developer',
        description: '',
        duties: [
            'Develop and maintain server-side logic.',
            'Integrate user-facing elements with server-side logic.',
            'Optimize the application for speed and scalability.',
            'Implement security and data protection.'
        ],
        qualifications: [
            'Minimum 2 years experience in backend development.',
            'Proficiency in server-side languages such as PHP, Python, or Node.js.',
            'Experience with databases like MySQL or MongoDB.',
            'Understanding of version control systems such as GIT.'
        ]
    },
    6: {
        title: 'Backend Developer',
        description: '',
        duties: [
            'Develop and maintain server-side logic.',
            'Integrate user-facing elements with server-side logic.',
            'Optimize the application for speed and scalability.',
            'Implement security and data protection.'
        ],
        qualifications: [
            'Minimum 2 years experience in backend development.',
            'Proficiency in server-side languages such as PHP, Python, or Node.js.',
            'Experience with databases like MySQL or MongoDB.',
            'Understanding of version control systems such as GIT.'
        ]
    },
};

const modal = document.getElementById('job-modal');
const jobTitle = document.getElementById('job-title');
const jobDesc = document.getElementById('job-desc');
const jobDuties = document.getElementById('job-duties');
const jobQualifications = document.getElementById('job-qualifications');
const closeBtn = document.querySelector('.close');

function loadJobData(jobId) {
    const job = jobData[jobId];
    jobTitle.textContent = job.title;
    jobDesc.textContent = job.desc;
    jobDuties.innerHTML = job.duties.map(duty => `<li>${duty}</li>`).join('');
    jobQualifications.innerHTML = job.qualifications.map(qual => `<li>${qual}</li>`).join('');
}

document.querySelectorAll('.job-btn').forEach(button => {
    button.addEventListener('click', function () {
        const jobId = this.getAttribute('data-job');
        loadJobData(jobId);
        modal.style.display = 'block';
    });
});

closeBtn.addEventListener('click', function () {
    modal.style.display = 'none';
});

window.addEventListener('click', function (event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
