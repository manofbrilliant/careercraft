const typingForm = document.querySelector(".typing-form");
const chatContainer = document.querySelector(".chat-list");
const suggestions = document.querySelectorAll(".suggestion");
const toggleThemeButton = document.querySelector("#theme-toggle-button");
const deleteChatButton = document.querySelector("#delete-chat-button");

// State variables
let userMessage = null;
let isResponseGenerating = false;

// Job-specific questions and answers
const jobFAQs = {
  "What are the responsibilities of a software developer?": "A software developer is responsible for designing, coding, testing, and maintaining software applications. They collaborate with other team members and stakeholders to deliver software solutions.",
  "How do I prepare for a job interview?": "To prepare for a job interview, research the company, practice common interview questions, dress appropriately, and be ready to discuss your skills and experiences.",
  "What skills are required for a project manager?": "A project manager needs strong leadership, communication, and organizational skills. They must also be proficient in project management methodologies and tools.",

  //mainpage prompts
  "Trained with 500+ prompts and guidelines": "The chatbot has been trained with over 500 prompts and guidelines to enhance its ability to provide accurate and relevant responses. This extensive training ensures that the chatbot can handle a wide range of queries and scenarios effectively, offering better assistance and more precise answers. By incorporating a diverse set of prompts and detailed guidelines, the chatbot improves its performance and user interaction, making it a more valuable tool for addressing various questions and needs.",
  "Covered 10+ Topics like resume,job,companies and more...":" Resume, Cover Letter, Job Applicatio, Job Interview , Career Guidance, Networking, Job Search Strategies, Job Offers, Professional Development, Employment Contracts, Career Transition, Job Portfolios, Reference Letters, Online Presence (LinkedIn, Personal Website), Salary Negotiation",
  "Customized with white and dark modes for better experience in it": "The website is designed with both white (light) and dark modes to enhance user experience. Users can switch between these modes depending on their preference or environmental lighting. Light mode provides a bright and clean interface, while dark mode offers a low-light alternative that reduces eye strain in dark environments and can save battery life on OLED screens. Implementing both modes allows for a more personalized and comfortable browsing experience.",
   "Clearness if needed at a time for better chat responses and interactions in it": "The delete symbol in the chatbot is used to clear all previous messages or interactions at once. This feature helps maintain clarity and focus during conversations by removing outdated or irrelevant messages. By clearing the chat history, users can ensure that the chatbot’s responses are relevant to the current context, improving overall interaction quality and making it easier to track and address new queries.",
  
  //for Resumes and cover letter
    "what is meant for resume": "A resume is a formal document that provides a summary of your professional background, including your work experience, education, skills, and accomplishments. It is used by job seekers to present their qualifications to potential employers and is often the first impression an employer has of a candidate.",
    "Why is a resume important": "A resume is important because it serves as a key tool in your job search, allowing you to highlight your qualifications and experiences to potential employers. A well-crafted resume can help you stand out from other candidates and increase your chances of being invited for an interview.",
    "What are the key sections of a resume": "The key sections of a resume typically include a header with your contact information, a summary or objective statement, your work experience, education, skills, and any additional sections such as certifications, volunteer work, or professional memberships. Each section should be concise and relevant to the job you are applying for.",    
    "How do I format a resume": "To format a resume, use a clean and professional layout with consistent font sizes and styles. Start with your most recent experience at the top and list your jobs in reverse chronological order. Use bullet points to make your responsibilities and achievements easy to read. Keep the resume to one or two pages, depending on your experience level.",    
    "What is a cover letter": "A cover letter is a document that accompanies your resume and provides a more detailed introduction to your application. It explains your interest in the position, highlights your most relevant experiences, and demonstrates your enthusiasm for the role. A cover letter allows you to personalize your application and make a stronger case for why you are the right candidate for the job.",    
    "Why is a cover letter important": "A cover letter is important because it gives you the opportunity to explain why you are interested in the job and how your skills and experiences make you a good fit. It allows you to address any gaps in your resume, elaborate on key achievements, and show your personality and communication skills.",   
    "What should I include in a cover letter": "A cover letter should include a greeting addressed to the hiring manager, an introduction that explains why you are applying, a body that highlights your most relevant qualifications and experiences, and a closing paragraph that expresses your enthusiasm for the role and thanks the employer for considering your application. Be sure to tailor your cover letter to each specific job you apply for.",    
    "How long should a cover letter be": "A cover letter should be concise and typically no longer than one page. Aim for three to four paragraphs that clearly convey your qualifications and enthusiasm for the position. Keep your writing focused and avoid repeating information from your resume.",

    //Job Applicatio, Job Interview , Career Guidance
      "What is a job application?": "A job application is a formal request submitted by a candidate to an employer for a specific job position. It typically includes a completed application form, a resume, and sometimes additional materials like a cover letter, portfolio, or references. The purpose of the job application is to provide the employer with a comprehensive view of your qualifications and to express your interest in the position.",      
      "What should I include in a job application?": "In a job application, you should include your resume, a cover letter (if required), and any other materials requested by the employer, such as work samples, transcripts, or a portfolio. Make sure to follow the employer's instructions carefully, provide accurate information, and ensure that all documents are professionally presented.",     
      "How do I submit a job application?": "To submit a job application, follow the instructions provided in the job posting. This may involve filling out an online application form, emailing your application materials, or submitting them through a company's career portal. Ensure that all required documents are included and formatted correctly before submission.",
      "What is the purpose of a job interview?": "The purpose of a job interview is to evaluate a candidate's suitability for a specific position. During the interview, the employer assesses your skills, experiences, and personality to determine if you are a good fit for the role and the company culture. It also gives you the opportunity to learn more about the job and the organization.",
      "How should I prepare for a job interview?": "To prepare for a job interview, research the company and the role you are applying for, practice common interview questions and answers, and prepare examples of your past work that demonstrate your skills and achievements. Additionally, plan your interview attire, review your resume, and prepare thoughtful questions to ask the interviewer.",
      "What types of questions should I expect in a job interview?": "In a job interview, you may be asked a variety of questions, including those about your work experience, skills, strengths and weaknesses, problem-solving abilities, and how you handle challenges. Behavioral questions that require you to provide examples of past experiences are also common. Be prepared to discuss your resume and to articulate why you are interested in the role and the company.",
      "How can I make a good impression in a job interview?": "To make a good impression in a job interview, dress professionally, arrive on time, and be courteous to everyone you encounter. Demonstrate enthusiasm for the role and the company, provide clear and concise answers to questions, and actively listen to the interviewer. Showing confidence, professionalism, and a positive attitude will help you stand out.",
      "What is career guidance?": "Career guidance is the support and advice provided to help individuals make informed decisions about their career paths. It includes assessing your strengths and interests, exploring different career options, setting career goals, and developing a plan to achieve those goals. Career guidance can come from career counselors, mentors, or online resources.",
      "Why is career guidance important?": "Career guidance is important because it helps you understand your career options, make informed decisions, and plan for your professional future. It can provide valuable insights into different career paths, help you set realistic goals, and offer strategies for achieving career success. Effective career guidance can lead to greater job satisfaction and career growth.",      
      "How can I find career guidance resources?": "To find career guidance resources, you can consult career counselors or coaches, visit career services offices at educational institutions, explore online career assessment tools, or seek advice from mentors and industry professionals. Many organizations and websites offer resources such as career assessments, job search tips, and professional development opportunities.",
    
      //Job Search Strategies, Job Offers, Professional Development, Employment Contracts
      "What are job search strategies?": "Job search strategies are methods and techniques used to identify and secure job opportunities. Effective strategies include networking with professionals, using online job boards and company websites, attending industry events and career fairs, and leveraging social media platforms like LinkedIn. Additionally, tailoring your resume and cover letter to each application, seeking informational interviews, and following up on job leads are also important strategies.",      
      "How can I use networking as a job search strategy?": "Networking as a job search strategy involves building and maintaining professional relationships that can help you learn about job opportunities and gain referrals. You can network by attending industry events, joining professional organizations, participating in online forums or LinkedIn groups, and reaching out to former colleagues, mentors, and industry contacts. Effective networking also involves staying in touch with your contacts and offering help in return when possible.",      
      "What role do online job boards play in job search strategies?": "Online job boards are platforms where employers post job openings and job seekers can search and apply for positions. They play a significant role in job search strategies by providing access to a wide range of job listings across various industries and locations. Popular job boards include Indeed, LinkedIn, Glassdoor, and Monster. It’s important to regularly check these sites, set up job alerts, and use relevant keywords to find suitable opportunities.",
      "What should I consider when evaluating a job offer?": "When evaluating a job offer, consider factors such as the salary and benefits package, job responsibilities, company culture, work-life balance, and opportunities for growth and advancement. Additionally, assess the location, job security, and any other conditions or terms mentioned in the offer. It’s important to weigh how well the offer aligns with your career goals and personal values before making a decision.",
      "How can I negotiate a job offer?": "To negotiate a job offer, first research and understand the market value for the position and your qualifications. Clearly communicate your needs and priorities, such as salary, benefits, or work flexibility, and provide reasons for your requests based on your skills and experiences. Be professional and open to compromise, and ensure you get the final agreement in writing. Negotiating effectively can help you secure a more favorable employment package.",
      "What is professional development?": "Professional development refers to the continuous process of improving and expanding your skills, knowledge, and experiences in your career. It includes activities such as attending workshops, earning certifications, pursuing advanced degrees, and participating in training programs. Professional development helps you stay current with industry trends, enhance your competencies, and advance your career.",
      "Why is professional development important?": "Professional development is important because it helps you keep up with changes in your field, acquire new skills, and enhance your job performance. It can lead to career advancement opportunities, increased job satisfaction, and greater competitiveness in the job market. Investing in your professional growth demonstrates a commitment to your career and can lead to personal and professional fulfillment.",
      "How can I find opportunities for professional development?": "Opportunities for professional development can be found through various sources, including online courses, workshops, seminars, and conferences. Many industry associations offer training and certification programs. Additionally, you can seek recommendations from mentors or colleagues, explore educational institutions for relevant courses, and take advantage of employer-sponsored development programs if available.",
      "What is an employment contract?": "An employment contract is a legal agreement between an employer and an employee that outlines the terms and conditions of employment. It includes details such as job title, duties, salary, benefits, work hours, and termination conditions. The contract serves to clarify the expectations and obligations of both parties and provides a framework for resolving any disputes that may arise.",
      "What should I look for in an employment contract?": "When reviewing an employment contract, check for key elements such as the job title and description, salary and compensation structure, benefits (e.g., health insurance, retirement plans), work schedule, and probationary periods. Also, review terms related to termination, confidentiality, and non-compete clauses. Ensure that the contract aligns with your expectations and legal rights before signing.",   
      "What are common terms and conditions in an employment contract?": "Common terms and conditions in an employment contract include job responsibilities, salary and payment frequency, work hours, benefits (such as health insurance and vacation), probationary period, termination notice requirements, confidentiality agreements, and non-compete clauses. It’s important to understand each term and seek clarification on any points that are unclear or negotiable.",
    
      //Career Transition, Job Portfolios, Reference Letters, Online Presence (LinkedIn, Personal Website), Salary Negotiation
        "What is career transition?": "Career transition refers to the process of changing from one career path to another. This may involve shifting industries, changing job roles, or pursuing new career goals. A successful career transition typically requires assessing your current skills, identifying new career interests, gaining additional qualifications if needed, and strategically planning and executing the change to ensure a smooth and effective shift.",
        "How can I manage a career transition effectively?": "To manage a career transition effectively, start by assessing your current skills, experiences, and career goals. Research the new field or role you are interested in and identify any gaps in your skills or qualifications. Create a plan that includes acquiring the necessary training or certifications, updating your resume and LinkedIn profile, networking within the new industry, and setting realistic goals. Seek support from career counselors, mentors, or industry professionals to guide you through the transition.",
        "What is a job portfolio?": "A job portfolio is a collection of documents and work samples that showcase your skills, experiences, and achievements. It often includes your resume, cover letters, work samples, case studies, certifications, and other relevant materials that demonstrate your capabilities to potential employers. A well-organized portfolio provides tangible evidence of your qualifications and can enhance your job application.",
        "How do I create an effective job portfolio?": "To create an effective job portfolio, gather and organize relevant documents and work samples that highlight your skills and accomplishments. Include a polished resume, examples of your best work, such as projects or reports, and any certifications or awards. Ensure that your portfolio is well-organized and easy to navigate, either in physical form or as a digital portfolio hosted on a personal website or professional platform.",
        "What are reference letters?": "Reference letters are written endorsements from individuals who can attest to your skills, character, and work ethic. These letters are typically provided by former employers, colleagues, professors, or other professional contacts who can speak positively about your qualifications and experiences. Reference letters are often requested during the job application process to support your candidacy.",
        "How do I request a reference letter?": "To request a reference letter, approach individuals who are familiar with your work and can provide a strong endorsement. Politely ask if they are willing to write a letter on your behalf, providing them with details about the job you are applying for and any specific points you would like them to cover. Give them sufficient time to prepare the letter and provide any necessary information or forms. Follow up with a thank you note to show your appreciation for their support.",
        "Why is online presence important in job searching?": "Online presence is important in job searching because it helps you establish and showcase your professional identity. A strong online presence can increase your visibility to potential employers, demonstrate your expertise, and build your personal brand. It also allows you to network with industry professionals and stay updated on job opportunities and industry trends.",
        "How can I enhance my online presence for job searching?": "To enhance your online presence, start by creating and maintaining a professional LinkedIn profile that highlights your skills, experiences, and accomplishments. Consider developing a personal website or portfolio to showcase your work. Engage with industry-related content, join relevant groups, and network with professionals in your field. Ensure that your social media profiles reflect a professional image and avoid posting content that could negatively impact your job search.",
        "What is salary negotiation?": "Salary negotiation is the process of discussing and agreeing on the terms of your compensation package with an employer. This can include negotiating base salary, bonuses, benefits, and other perks. Effective salary negotiation involves researching market rates, understanding your value, and presenting a well-reasoned case for your desired compensation while being open to compromise.",
        "How can I prepare for salary negotiation?": "To prepare for salary negotiation, research the typical salary range for the position and industry in your location. Assess your own qualifications, experience, and accomplishments to understand your value. Prepare a clear and compelling case for why you deserve the salary you are requesting, including any relevant data or examples. Practice your negotiation skills and be ready to discuss other aspects of the compensation package, such as benefits and work flexibility."
};

// Load theme and chat data from local storage on page load
const loadDataFromLocalstorage = () => {
  const savedChats = localStorage.getItem("saved-chats");
  const isLightMode = (localStorage.getItem("themeColor") === "light_mode");

  // Apply the stored theme
  document.body.classList.toggle("light_mode", isLightMode);
  toggleThemeButton.innerText = isLightMode ? "dark_mode" : "light_mode";

  // Restore saved chats or clear the chat container
  chatContainer.innerHTML = savedChats || '';
  document.body.classList.toggle("hide-header", savedChats);

  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
}

// Create a new message element and return it
const createMessageElement = (content, ...classes) => {
  const div = document.createElement("div");
  div.classList.add("message", ...classes);
  div.innerHTML = content;
  return div;
}

// Show typing effect by displaying words one by one
// Show typing effect by displaying words one by one
const showTypingEffect = (text, textElement, incomingMessageDiv) => {
  const words = text.split(' ');
  let currentWordIndex = 0;

  const typingInterval = setInterval(() => {
    textElement.innerText += (currentWordIndex === 0 ? '' : ' ') + words[currentWordIndex++];
    incomingMessageDiv.querySelector(".icon").classList.add("hide");

    if (currentWordIndex === words.length) {
      clearInterval(typingInterval);
      isResponseGenerating = false;
      incomingMessageDiv.querySelector(".icon").classList.remove("hide");
      localStorage.setItem("saved-chats", chatContainer.innerHTML);
    }
    chatContainer.scrollTo(0, chatContainer.scrollHeight);
  }, 75);
}

// Fetch response from the predefined job FAQs
const generateJobResponse = async (incomingMessageDiv) => {
  const textElement = incomingMessageDiv.querySelector(".text");

  // Check if the user's message exists in the jobFAQs object
  const response = jobFAQs[userMessage] || "Sorry, I don't have an answer for that question.";

  // Wait for 3 seconds before showing the response
  setTimeout(() => {
    showTypingEffect(response, textElement, incomingMessageDiv); // Show typing effect
    incomingMessageDiv.classList.remove("loading");
    localStorage.setItem("saved-chats", chatContainer.innerHTML);
  }, 3000); // 3-second delay for loading animation
}

// Show a loading animation while waiting for the response
const showLoadingAnimation = () => {
  const html = `<div class="message-content">
                  <img class="avatar" src="chatbot.jpg" alt="Job avatar">
                  <p class="text"></p>
                  <div class="loading-indicator">
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                  </div>
                </div>
                <span onClick="copyMessage(this)" class="icon material-symbols-rounded">content_copy</span>`;

  const incomingMessageDiv = createMessageElement(html, "incoming", "loading");
  chatContainer.appendChild(incomingMessageDiv);

  chatContainer.scrollTo(0, chatContainer.scrollHeight);
  generateJobResponse(incomingMessageDiv);
}

// Handle sending outgoing chat messages
const handleOutgoingChat = () => {
  userMessage = typingForm.querySelector(".typing-input").value.trim() || userMessage;
  if(!userMessage || isResponseGenerating) return;

  isResponseGenerating = true;

  const html = `<div class="message-content">
                  <img class="avatar" src="user.jpg" alt="User avatar">
                  <p class="text"></p>
                </div>`;

  const outgoingMessageDiv = createMessageElement(html, "outgoing");
  outgoingMessageDiv.querySelector(".text").innerText = userMessage;
  chatContainer.appendChild(outgoingMessageDiv);
  
  typingForm.reset(); // Clear input field
  document.body.classList.add("hide-header");
  chatContainer.scrollTo(0, chatContainer.scrollHeight);
  showLoadingAnimation(); // Show loading animation immediately
}


// Toggle between light and dark themes
toggleThemeButton.addEventListener("click", () => {
  const isLightMode = document.body.classList.toggle("light_mode");
  localStorage.setItem("themeColor", isLightMode ? "light_mode" : "dark_mode");
  toggleThemeButton.innerText = isLightMode ? "dark_mode" : "light_mode";
});

// Delete all chats from local storage when button is clicked
deleteChatButton.addEventListener("click", () => {
  if (confirm("Are you sure you want to delete all the chats?")) {
    localStorage.removeItem("saved-chats");
    loadDataFromLocalstorage();
  }
});

// Set userMessage and handle outgoing chat when a suggestion is clicked
suggestions.forEach(suggestion => {
  suggestion.addEventListener("click", () => {
    userMessage = suggestion.querySelector(".text").innerText;
    handleOutgoingChat();
  });
});

// Prevent default form submission and handle outgoing chat
typingForm.addEventListener("submit", (e) => {
  e.preventDefault(); 
  handleOutgoingChat();
});

loadDataFromLocalstorage();
