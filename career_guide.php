
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }

        .header {
            position: relative;
            margin-bottom: 20px;
        }

        .title {
            font-size: 2.5rem;
            color: #222;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        .dropdown-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            margin-bottom: 20px;
        }

        .dropdown {
            padding: 12px 24px;
            font-size: 1.2rem;
            border: 2px solid #007BFF;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dropdown:focus {
            border-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
            outline: none;
            transform: scale(1.02);
        }

        .content-display {
            width: 100%;
            text-align: left;
        }

        .content-item {
            font-size: 1rem;
            padding: 20px;
            margin: 10px 0;
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 12px;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
        }

        .content-item:hover {
            border-color: #007BFF;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            transform: translateY(-5px);
        }

        .content-item h2 {
            margin-top: 0;
            color: #007BFF;
            font-size: 1.5rem;
        }

        .content-item p {
            line-height: 1.6;
        }

        .hidden {
            display: none;
        }
        /* From Uiverse.io by SalladShooter */ 
.button {
  cursor: pointer;
  padding: 1em;
  font-size: 1em;
  width: 7em;
  aspect-ratio: 1/0.25;
  color: white;
  background: #212121;
  background-size: cover;
  background-blend-mode: overlay;
  border-radius: 0.5em;
  outline: 0.1em solid #353535;
  border: 0;
  box-shadow: 0 0 1em 1em rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  position: relative;
}

.button:hover {
  transform: scale(1.1);
  box-shadow: 0 0 1em 0.45em rgba(0, 0, 0, 0.1);
  background: linear-gradient(45deg, #212121, #252525);
  background: radial-gradient(
    circle at bottom,
    rgba(50, 100, 180, 0.5) 10%,
    #212121 70%
  );
  outline: 0;
}

.icon {
  fill: white;
  width: 1em;
  aspect-ratio: 1;
  top: 0;
  left: 0;
  margin: auto;
  transform: translate(-35%, 10%);
}
    </style>
</head>
<body>
<button class="button" onclick="window.location.href='<?= $action->helper->url('dashboard') ?>'">
  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="icon">
    <path
      d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"
    ></path>
  </svg>
  Go Back
</button>
    <div class="container">
        <section class="content">
            <div class="header">
                <h1 class="title">Career Guidance</h1>
            </div>
            <div class="dropdown-container">
                <select id="contentSelector" class="dropdown">
                    <option value="option1">Software Industry</option>
                    <option value="option2">Electronics</option>
                    <option value="option3">Mechanical</option>
                    <option value="option4">Civil Constructions</option>
                </select>
            </div>

            <div class="content-display" id="contentDisplay">
                <div id="content1" class="content-item">
                    <h2>Software Industry</h2>
                    <p><b>1. Industry Insights and Trends:</b><br>
                        * Rapid growth in artificial intelligence (AI) and machine learning (ML) creating a surge in demand for professionals skilled in these areas.<br>
                        * The transition to cloud-native architectures and services is increasing the need for expertise in cloud platforms like AWS, Azure, and Google Cloud.<br>
                        * Cybersecurity remains a critical area as cyber threats evolve; skills in threat analysis, ethical hacking, and security compliance are highly sought after.<br>
                        * Expansion of remote work technologies and tools, driving the need for developers experienced in remote collaboration tools and virtual environments.</p>
                    <p><b>2. Role and Skill-Based Guidance:</b><br>
                        <b>Software Developer</b><br>
                        Skills: Proficiency in programming languages such as Python, Java, C++, and JavaScript; expertise in software development methodologies; experience with version control systems (e.g., Git); and knowledge of Agile or Scrum frameworks.<br>
                        <b>Data Scientist</b><br>
                        Skills: Advanced statistical analysis, proficiency in programming languages such as Python or R, experience with machine learning algorithms, and ability to work with large datasets using SQL and data visualization tools.<br>
                        <b>DevOps Engineer</b><br>
                        Skills: Expertise in continuous integration and continuous deployment (CI/CD) pipelines, proficiency with containerization tools (e.g., Docker, Kubernetes), and experience with infrastructure-as-code tools.<br>
                        <b>Cybersecurity Specialist</b><br>
                        Skills: Knowledge of network security protocols, experience with penetration testing and vulnerability assessments, understanding of encryption methods, and familiarity with compliance regulations.<br>
                        <b>UI/UX Designer</b><br>
                        Skills: Experience with design tools such as Adobe XD or Figma, skills in creating wireframes and prototypes, knowledge of user research methods, and ability to design responsive and accessible user interfaces.</p>
                    <p><b>3. Job Market Opportunities:</b></p>
                    <p>High demand for software professionals in tech hubs such as San Francisco, Seattle, New York, and Austin.<br>
                        Emerging tech cities like Denver, Atlanta, and Raleigh-Durham offer growing job prospects.<br>
                        Increasing remote work opportunities for software developers, data scientists, and cybersecurity experts.<br>
                        International demand in global cities including London, Toronto, Berlin, and Bangalore.</p>
                    <b>Key Locations:</b><br>
                    San Francisco, New York, Seattle, Austin, Denver, Atlanta, Raleigh-Durham, Toronto, London, Berlin, Bangalore
                </div>

                <div id="content2" class="content-item hidden">
                    <h2>Electronics</h2>
                    <p><b>1. Industry Insights and Trends:</b><br>
                        * Growth in the Internet of Things (IoT) and smart devices driving demand for electronic engineers and embedded systems specialists.<br>
                        * Advances in semiconductor technology and miniaturization requiring innovation in electronic circuit design and integration.<br>
                        * Increasing emphasis on sustainable electronics and energy-efficient designs to address environmental concerns.<br>
                        * Expansion of automotive electronics and automation, creating opportunities in designing electronic control systems and sensors.</p>
                    <p><b>2. Role and Skill-Based Guidance:</b><br>
                        <b>Electronics Engineer</b><br>
                        Skills: Circuit design, PCB layout, signal processing, experience with microcontrollers, and knowledge of embedded systems.<br>
                        <b>Embedded Systems Engineer</b><br>
                        Skills: Proficiency in C/C++ programming, experience with real-time operating systems (RTOS), understanding of hardware-software integration, and debugging skills.<br>
                        <b>Hardware Design Engineer</b><br>
                        Skills: Expertise in designing electronic components and systems, familiarity with CAD tools for PCB design, and knowledge of signal integrity and power management.<br>
                        <b>Test Engineer</b><br>
                        Skills: Experience with test equipment (oscilloscopes, multimeters), understanding of test methodologies, and ability to design and implement testing procedures.<br>
                        <b>Systems Engineer</b><br>
                        Skills: Knowledge of system architecture, experience with system integration and testing, and understanding of electronic system requirements and constraints.</p>
                    <p><b>3. Job Market Opportunities:</b></p>
                    <p>Demand for electronic engineers in tech hubs such as Silicon Valley, Shenzhen, and Tokyo.<br>
                        Emerging markets in cities like Bangalore, Ho Chi Minh City, and Tel Aviv.<br>
                        Opportunities in automotive electronics and IoT industries in regions like Detroit and Munich.<br>
                        International opportunities in research and development centers across Europe and Asia.</p>
                    <b>Key Locations:</b><br>
                    Silicon Valley, Shenzhen, Tokyo, Bangalore, Ho Chi Minh City, Tel Aviv, Detroit, Munich
                </div>

                <div id="content3" class="content-item hidden">
                    <h2>Mechanical</h2>
                    <p><b>1. Industry Insights and Trends:</b><br>
                        * Increasing demand for automation and robotics in manufacturing and industrial processes.<br>
                        * Growing focus on sustainable design and energy efficiency in mechanical systems.<br>
                        * Advances in materials science driving innovation in product design and manufacturing techniques.<br>
                        * Expansion of the aerospace and automotive sectors, creating opportunities in vehicle and aircraft design.</p>
                    <p><b>2. Role and Skill-Based Guidance:</b><br>
                        <b>Mechanical Engineer</b><br>
                        Skills: Proficiency in CAD software, experience with mechanical design and analysis, understanding of thermodynamics and fluid mechanics, and knowledge of manufacturing processes.<br>
                        <b>Automation Engineer</b><br>
                        Skills: Experience with robotics and automation systems, knowledge of control systems, and proficiency in programming languages for automation.<br>
                        <b>Manufacturing Engineer</b><br>
                        Skills: Expertise in production processes, experience with lean manufacturing principles, and understanding of quality control and process optimization.<br>
                        <b>Aerospace Engineer</b><br>
                        Skills: Knowledge of aircraft systems and design, experience with aerospace materials and propulsion systems, and familiarity with aerospace standards and regulations.<br>
                        <b>HVAC Engineer</b><br>
                        Skills: Expertise in heating, ventilation, and air conditioning systems, understanding of building codes and energy regulations, and experience with HVAC design and maintenance.</p>
                    <p><b>3. Job Market Opportunities:</b></p>
                    <p>High demand in industrial hubs such as Detroit, Chicago, and Munich.<br>
                        Emerging opportunities in technology centers like Bangalore and Seoul.<br>
                        Growth in aerospace and automotive sectors in cities like Seattle, Toulouse, and Stuttgart.<br>
                        International opportunities in countries with advanced manufacturing and engineering sectors.</p>
                    <b>Key Locations:</b><br>
                    Detroit, Chicago, Munich, Bangalore, Seoul, Seattle, Toulouse, Stuttgart
                </div>

                <div id="content4" class="content-item hidden">
                    <h2>Civil Constructions</h2>
                    <p><b>1. Industry Insights and Trends:</b><br>
                        * Increased investment in infrastructure development and urbanization projects driving demand for civil engineers.<br>
                        * Growing focus on sustainable construction practices and green building certifications.<br>
                        * Advances in construction technology, including smart buildings and automated construction techniques.<br>
                        * Expansion of infrastructure projects in emerging economies and smart city initiatives.</p>
                    <p><b>2. Role and Skill-Based Guidance:</b><br>
                        <b>Civil Engineer</b><br>
                        Skills: Expertise in structural analysis and design, knowledge of construction materials and methods, and proficiency in CAD and structural engineering software.<br>
                        <b>Construction Manager</b><br>
                        Skills: Experience in project management, knowledge of construction processes and regulations, and ability to manage budgets and schedules.<br>
                        <b>Structural Engineer</b><br>
                        Skills: Proficiency in structural design, understanding of load analysis and material strength, and experience with structural engineering software.<br>
                        <b>Geotechnical Engineer</b><br>
                        Skills: Knowledge of soil mechanics and foundation design, experience with site investigations and soil testing, and understanding of geotechnical engineering principles.<br>
                        <b>Urban Planner</b><br>
                        Skills: Experience with land use planning, knowledge of zoning regulations and urban design, and ability to develop and implement urban development plans.</p>
                    <p><b>3. Job Market Opportunities:</b></p>
                    <p>High demand in major metropolitan areas such as New York, London, and Sydney.<br>
                        Emerging markets in cities with rapid urbanization such as Mumbai, Jakarta, and Cairo.<br>
                        Opportunities in infrastructure projects and smart city developments across various regions.<br>
                        International opportunities in countries with significant infrastructure development programs.</p>
                    <b>Key Locations:</b><br>
                    New York, London, Sydney, Mumbai, Jakarta, Cairo
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('contentSelector').addEventListener('change', function() {
            const selectedOption = this.value;
            document.querySelectorAll('.content-item').forEach(item => {
                item.classList.add('hidden');
            });
            document.getElementById('content' + selectedOption.replace('option', '')).classList.remove('hidden');
        });
    </script>

