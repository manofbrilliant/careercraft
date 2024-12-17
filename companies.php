
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>
    <link rel="stylesheet" href="<?=$action->helper->loadcss('companies.css')?>">
    <style>
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
        <h1>Company List</h1>
        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for company, city, state, or field...">
        </div>
        <table id="companyTable">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Field</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Bharat Heavy Electronics Limited (BHEL)</td>
                    <td>Machilipatnam</td>
                    <td>Andhra Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mahindra</td>
                    <td>Visakhapatnam</td>
                    <td>Andhra Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Oil India Limited</td>
                    <td>Duliajan</td>
                    <td>Assam</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hindustan Paper Corporation Limited (HPCL)</td>
                    <td>Jagiroad</td>
                    <td>Assam</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Heavy Electricals Limited (BHEL)</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited (IOCL)</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Aluminium Company (BALCO)</td>
                    <td>Kobra</td>
                    <td>Chhattisgarh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hira Group</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Goa Shipyard Limited</td>
                    <td>Vasco da Gama</td>
                    <td>Goa</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Dempo Group</td>
                    <td>Panji</td>
                    <td>Goa</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Reliance Industries Limited (RIL)</td>
                    <td>Jamnagar</td>
                    <td>Gujarat</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Essar Group</td>
                    <td>Vadinar</td>
                    <td>Gujarat</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Maruti Suzuki India Ltd.</td>
                    <td>Gurgaon</td>
                    <td>Haryana</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hero MotoCorp</td>
                    <td>Dharuhera</td>
                    <td>Haryana</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Himachal Pradesh Power Corporation Limited (HPPCL)</td>
                    <td>Shimla</td>
                    <td>Himachal Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Himachal Pradesh State Industrial Development Corporation Ltd. (HPSIDC)</td>
                    <td>Shimla</td>
                    <td>Himachal Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tata Steel</td>
                    <td>Jamshedpur</td>
                    <td>Jharkhand</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>MECON Limited</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Earth Movers Limited (BEML)</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bosch Ltd.</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Malabar Cements Ltd</td>
                    <td>Cherthala</td>
                    <td>Kerala</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Apollo Tyres Ltd.</td>
                    <td>Perambra</td>
                    <td>Kerala</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Heavy Electricals Limited (BHEL)</td>
                    <td>Bhopal</td>
                    <td>Madhya Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Cummins India Ltd.</td>
                    <td>Indore (Regional presence)</td>
                    <td>Madhya Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tata Motors</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Thermax Ltd.</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Manipur State Power Company Limited (MSPCL)</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Manipur Industrial Development Corporation Limited (MANIDCO)</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Meghalaya Energy Corporation Limited (MeECL)</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Meghalaya Industrial Development Corporation Limited (MeIDCL)</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mizoram State Tobacco Company Ltd. (MSTC)</td>
                    <td>Aizawl</td>
                    <td>Mizoram</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mizoram State Electricity Board (MSEB)</td>
                    <td>Aizawl</td>
                    <td>Mizoram</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nagaland Industrial Development Corporation Limited (NIDC)</td>
                    <td>Kohima</td>
                    <td>Nagaland</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nagaland State Mineral Development Corporation Limited (NSMDC)</td>
                    <td>Kohima</td>
                    <td>Nagaland</

td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mahanadi Coalfields Limited (MCL)</td>
                    <td>Sambalpur</td>
                    <td>Odisha</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hindustan Aeronautics Limited (HAL)</td>
                    <td>Sunabeda</td>
                    <td>Odisha</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sonalika International Tractors Ltd.</td>
                    <td>Hoshiarpur</td>
                    <td>Punjab</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hero MotoCorp</td>
                    <td>Ludhiana</td>
                    <td>Punjab</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hindustan Zinc Limited</td>
                    <td>Udaipur</td>
                    <td>Rajasthan</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Birla Corporation Limited</td>
                    <td>Chanderia</td>
                    <td>Rajasthan</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sikkim Mining Corporation Ltd</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sikkim State Agriculture Marketing Board (SSAMB)</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Ashok Leyland</td>
                    <td>Chennai</td>
                    <td>Tamil Nadu</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>TVS Motors</td>
                    <td>Hosur</td>
                    <td>Tamil Nadu</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Heavy Electricals Limited (BHEL)</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tata Advanced Systems Limited (TASL)</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tripura State Electricity Corporation Limited (TSECL)</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tripura Natural Gas Company Limited (TNGCL)</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tata Motors</td>
                    <td>Lucknow (Regional office)</td>
                    <td>Uttar Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hero MotoCorp</td>
                    <td>Haridwar (Regional office serving Uttar Pradesh)</td>
                    <td>Uttar Pradesh</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bharat Heavy Electricals Limited (BHEL)</td>
                    <td>Haridwar</td>
                    <td>Uttarakhand</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Hindustan Motors</td>
                    <td>Uttarpara</td>
                    <td>West Bengal</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Andrew Yule & Company Ltd.</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>Mechanical</td>
                </tr>
<tr>
                    <td></td>
                    <td>DALVKOT BIO FUELS Private

Limited</td>
                    <td>Atchutapuram</td>
                    <td>Andhra Pradesh</td>
                    <td>oil and gas</td>
                </tr>
             <tr>
                    <td></td>
                    <td>Kaleesuwari Refinery And Industry

Private Limited</td>
                    <td>Kakinada</td>
                    <td>Andhra Pradesh</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sudheer enterprises</td>
                    <td>Vijayawada</td>
                    <td>Andhra Pradesh</td>
                    <td>oil and gas</td>
                </tr>
           
                <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited

(Pipelines Division)</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
             
                <tr>
                    <td></td>
                    <td>Singareni Collieries Company Limited

(SCCL)</td>
                    <td>Singareni, Peddapalli district</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
    <tr>
                    <td></td>
                    <td>Oil India Limited (OIL) </td>
<td>Rajanna Sircilla district</td>
                   
               <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Singareni Collieries Company Limited

(SCCL)</td>
                    <td>Singareni, Peddapalli district</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gas Authority of India Limited (GAIL)

</td>
                    <td>Hyderabad (office presence)</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Singareni Collieries Company Limited

(SCCL)</td>
                    <td>Singareni, Peddapalli district</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Oil India Limited (OIL)</td>
                    <td>Rajanna Sircilla district</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gas Authority of India Limited (GAIL)

</td>
                    <td>Hyderabad (office presence)</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
OIL and Natural Gas Corporation </td>
                    <td> Nalgonda district</td>
                    <td>Telangana</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Oil India Limited (OIL)</td>
                    <td>Duliajan, Dibrugarh district</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
Numaligarh Refinery Limited (NRL)
</td>
                    <td>Numaligarh, Golaghat district</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
                </tr><tr>
                    <td></td>
                    <td>Assam Oil Division (AOD) of Oil and

Natural Gas </td>
                    <td>Corporation (ONGC)
Nazira, Sivasagar

district</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
                </tr>
 <tr>
                    <td></td>
                    <td>Numaligarh Refinery Limited

(NRL)\</td>
                    <td>Numaligarh, Golaghat district</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
</tr>
               
 <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited (IOCL)

- Guwahati Refinery</td>
                    <td>Noonmati, Guwahati</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
</tr>
           
 <tr>
                    <td></td>
                    <td>Bongaigaon Refinery and

Petrochemicals Limited (BRPL)
</td>
                    <td>Bongaigaon, Bongaigaon district</td>
                    <td>Assam</td>
                    <td>oil and gas</td>
</tr>
             <tr>
                    <td></td>
                    <td>Oil and Natural Gas Corporation

(ONGC) - Ankleshwar Asset</td>
                    <td>Ankleshwar</td>
                    <td>Gujarat </td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td>Gujarat State Petroleum Corporation

(GSPC)</td>
                    <td>Gandhinagar</td>
                    <td>Gujarat </td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td> Cairn India (Vedanta Limited) - Ravva

Oil and Gas Field</td>
                    <td>Cambay Basin (Ankleshwar and

Cambay)</td>
                    <td>Gujarat</td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td> Hindustan Petroleum Corporation

Limited (HPCL) - LPGBottlingPlant
</td>
                    <td>Kurukshetra</td>
                    <td>
Haryana</td>
                    <td>oil and gas</td>
</tr>
           
              <tr>
                    <td></td>
                    <td> Indian Oil Corporation Limited (IOCL)

- LPG Bottling Plant

</td>
                    <td>Faridabad</td>
                    <td>Haryana</td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td>
Nagina Group - Petroleum Products

</td>
                    <td>Ambala</td>
                    <td>Haryana </td>
                    <td>oil and gas</td>
</tr>
             <tr>
                    <td></td>
                    <td>
Bharat Petroleum Corporation Limited (BPCL) - LPG

Bottling Plant

</td>
                    <td>Karnal</td>
                    <td>Haryana</td>
                    <td>oil and gas</td>
</tr>
             <tr>
                    <td></td>
                    <td> Mangalore Refinery and

Petrochemicals Limited (MRPL)

</td>
                    <td>Mangalore</td>
                    <td>Karnataka</td>
                    <td>oil and gas</td>
</tr>
             <tr>
                    <td></td>
                    <td>Hindustan Petroleum Corporation

Limited (HPCL) - LPG Bottling Plant
</td>
                    <td>Devanagonthi, Bangalore</td>
                    <td>Karnataka</td>
                    <td>oil and gas</td>
</tr>
         <tr>
                    <td></td>
                    <td> Indian Oil Corporation Limited (IOCL)

- LPG Bottling Plant
</td>
                    <td>Yelahanka, Bangalore</td>
                    <td>
Karnataka</td>
                    <td>oil and gas</td>
</tr>
                 <tr>
                    <td></td>
                    <td>Oil India Limited (OIL) - Sohagpur

Coal Bed Methane (CBM) Block
</td>
                    <td>Sohagpur, Shahdol district </td>
                    <td>
Madhya pradesh </td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td> Cairn India (Vedanta Limited) -

Cambay Basin

</td>
                    <td>Cambay Basin (includes parts of

Madhya Pradesh)</td>
                    <td>
Madhya pradesh</td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td> Reliance Industries Limited (RIL) -

Sohagpur Coal Bed Methan(CBM)Block


</td>
                    <td>Sohagpur, Shahdol district</td>
                    <td>Madhya pradesh</td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td>Oil and Natural Gas Corporation
(ONGC) - Mumbai High and Uran
Offshore Mumbai
(Mumbai High) and Uran
 </td>
 <td>Mumbai</td>
                    <td>Maharashtra</td>
                 
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td>
Reliance Industries Limited (RIL) - Jamnagar Refinery

</td>
                    <td>Jamnagar (also operates in

Maharashtra)</td>
                    <td>Maharashtra</td>
                    <td>oil and gas</td>
</tr>
              <tr>
                    <td></td>
                    <td>
GAIL (India) Limited - Pipeline Network

</td>
                    <td>Across Maharashtra</td>
                    <td>Maharashtra</td>
                    <td>oil and gas</td>
</tr>
          <tr>
                    <td></td>
                    <td>Oil India Limited (OIL) - CBM Blocks

</td>
                    <td>Ib Valley and Talcher Coalfields</td>
                    <td>Odisha </td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited (IOCL)

- Paradip Refinery

</td>
                    <td>Paradip, Jagatsinghpur district</td>
                    <td>Odish </td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>
Oil and Natural Gas Corporation (ONGC) - CBM Blocks


</td>
                    <td>Mahanadi Basin</td>
                    <td>Odisha</td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>
Oil and Natural Gas Corporation (ONGC) - RJ-ON/6

Block

</td>
                    <td>Barmer</td>
                    <td>Rajasthan </td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>Cairn Oil & Gas (Vedanta Limited)

 </td>
                    <td> Barmer</td>
                    <td>
Rajasthan</td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>
Hindustan Petroleum Corporation Limited (HPCL) -

LPG
</td>
                    <td> Bottling Plant
 Jaipur</td>
                    <td>Rajasthan </td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>Sikkim Oil & Gas Limited  </td>
                    <td>Headquartered in Gangtok</td>
                    <td>Sikkim</td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited </td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>oil and gas</td>
</tr>      <tr>
                    <td></td>
                    <td> Hindustan Petroleum Corporation

Limited</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>oil and gas</td>
</tr>       <tr>
                    <td></td>
                    <td> Indian Oil Corporation Limited

(IOCL)</td>
                    <td>Chennai</td>
                    <td>Tamil Nadu</td>
                    <td>oil and gas</td>
</tr>    
           <tr>
                    <td></td>
                    <td> Oil and Natural Gas Corporation

Limited (ONGC)</td>
                    <td>Chennai</td>
                    <td> Tamil Nadu</td>
                    <td>oil and gas</td>
</tr>    
           <tr>
                    <td></td>
                    <td> Hindustan Petroleum Corporation

Limited (HPCL)</td>
                    <td>Chennai</td>
                    <td> Tamil Nadu</td>
                    <td>oil and gas</td>
</tr>    
           <tr>
                    <td></td>
                    <td>Oil and Natural Gas Corporation

Limited (ONGC) </td>
                    <td>Agartala,</td>
                    <td>Tripura</td>
                    <td>oil and gas</td>
</tr>    
           <tr>
                    <td></td>
                    <td> Indian Oil Corporation Limited

(IOCL)</td>
                    <td>Agartala</td>
                    <td> Tripura</td>
                    <td>oil and gas</td>
</tr>    
           <tr>
                    <td></td>
                    <td> Bharat Petroleum Corporation Limited

(BPCL)</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>oil and gas</td>
</tr>    
       
           <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited (IOCL)

</td>
                    <td>Noida</td>
                    <td>Uttar Pradesh</td>
                    <td>oil and gas</td>
</tr>    <tr>
                    <td></td>
                    <td> Oil and Natural Gas Corporation

Limited (ONGC)</td>
                    <td> Dehradun</td>
                    <td> Uttar Pradesh</td>
                    <td>oil and gas</td>
</tr>        <tr>
                    <td></td>
                    <td>Bharat Petroleum Corporation Limited

(BPCL) </td>
                    <td>Kanpur
</td>
                    <td>Uttar Pradesh</td>
                    <td>oil and gas</td>
</tr>        <tr>
                    <td></td>
                    <td>Indian Oil Corporation Limited

(IOCL)</td>
                    <td> Haridwar</td>
                    <td> Uttarakhand</td>
                    <td>oil and gas</td>
</tr>        <tr>
                    <td></td>
                    <td> Indian Oil Corporation Limited

(IOCL)</td>
                    <td>Kolkata</td>
                    <td> West Bengal</td>
                    <td>oil and gas</td>
</tr>        <tr>
                    <td></td>
                    <td> Oil and Natural Gas Corporation

Limited (ONGC)</td>
                    <td>Kolkata</td>
                    <td> West Bengal</td>
                    <td>oil and gas</td>
</tr>        <tr>
                    <td></td>
                    <td> Bharat Petroleum Corporation Limited

(BPCL)</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>oil and gas</td>
</tr> 
  <tr>
                    <td></td>
                    <td>CARE AND SHARE (INDIA) PRIVATE LIMITED</td>
                    <td>Krishna</td>
                    <td>Andhra Pradesh</td>
                    <td>Food Industry</td>
                </tr>
 <tr>
                    <td></td>
                    <td>CRANE FOOD PRODUCTS PRIVATE LIMITED</td>
                    <td>Guntur</td>
                    <td>Andhra Pradesh</td>
                    <td>Food Industry</td>
                </tr>
                <tr>
                    <td></td>
                    <td>K.P.R.AGROCHEM LIMITED</td>
                    <td>Kakinada</td>
                    <td>Andhra Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ramcharan Food Industries Private Ltd</td>
                    <td>KatedhanTelangana</td>
                    <td>Telangana</td>
                    <td>Food Industry</td>
                </tr>

               <tr>
                    <td></td>
                    <td>Ghanta Foods Pvt Ltd</td>
                    <td>Secunderabad</td>
                    <td>Telangana</td>
                    <td>Food Industry</td>
                </tr>
  <tr>
                    <td></td>
                    <td>Chintoos food</td>
                    <td>Kattedan Road</td>
                    <td>Telangana</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cremica Food Industries Ltd</td>
                    <td>Okhla Phase III</td>
                    <td>Delhi</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>S.S. Food Industries New Delhi</td>
                    <td>Lawrence Road Industrial Are</td>
                    <td>Delhi</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>SHREE RAM FOOD INDUSTRY</td>
                    <td>Lado Sarai</td>
                    <td>Delhi</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Himalayan Mushroom

</td>
                    <td>Itanagar</td>
                    <td>arunachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ginger Candy Manufacturing Unit

</td>
                    <td>Naharlagun</td>
                    <td>arunachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Green Valley Food Industries



</td>
                    <td>Pasighat</td>
                    <td>arunachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Amrit Cement Industries Ltd
</td>
                    <td>Guwahati</td>
                    <td>assam</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Barak Valley Cements Ltd

</td>
                    <td>Guwahati</td>
                    <td>assam</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Assam Co-operative Jute Mills Ltd



</td>
                    <td>Silchar</td>
                    <td>assam</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Bihar State Milk Co-operative Federation Ltd </td>
                    <td>Patna</td>
                    <td>bihar</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>National Research Centre on Litchi (ICAR-NRCL)</td>
                    <td>
Muzaffarpur</td>
                    <td>bihar</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>rajgir Organic Agriculture Producer Company Ltd</td>
                    <td>

Rajgir </td>
                    <td>bihar</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ciba Masala</td>
                    <td>Margao</td>
                    <td>goa</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Vegazva Foods</td>
                    <td>Porvorim</td>
                    <td>goa</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Goa Food Products</td>
                    <td>Mapusa</td>
                    <td>goa</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Chhattisgarh Rice MillersAssociation</td>
                    <td>Raipur</td>
                    <td>chhattisgard</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Rajnandgaon Rice Millers</td>
                    <td>Rajnandgaon</td>
                    <td>chhattisgard</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Bhilai Food Products</td>
                    <td>Bhilai</td>
                    <td>chhattisgard</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Amul</td>
                    <td>Anand</td>
                    <td>gujarat</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Rasna International</td>
                    <td>Ahmedabad</td>
                    <td>gujarat</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Balaji Wafers Pvt. Ltd.</td>
                    <td>Rajkot</td>
                    <td>gujarat</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Haryana Milk Foods ltd.</td>
                    <td>Ambala</td>
                    <td>haryana</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Vadilal Industries Ltd.</td>
                    <td>Gurugram</td>
                    <td>haryana</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Haryana Agro Industries Corporation Ltd.</td>
                    <td>Panchkula</td>
                    <td>haryana</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Himalaya International Ltd</td>
                    <td>Parwanoo</td>
                    <td>himachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Nestle India Ltd.</td>
                    <td>Tahliwal</td>
                    <td>himachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cremica Food Industries Ltd</td>
                    <td>Baddi</td>
                    <td>himachal pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ruchi Group of Industries</td>
                    <td>Ranchi</td>
                    <td>jhar kanda</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Rajhans Foods Pvt Ltd</td>
                    <td>Jamshedpu</td>
                    <td>jhar kanda</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Amrit Feeds Ltd</td>
                    <td>Ranchi</td>
                    <td>jhar kanda</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>MTR Foods Pvt Ltd</td>
                    <td>Bangalore</td>
                    <td>karnataka</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>ITC Limited</td>
                    <td>Bangalore </td>
                    <td>karnataka</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Britannia Industries Ltd </td>
                    <td>Bangalore </td>
                    <td>karnataka</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Eastern Condiments Pvt Ltd </td>
                    <td> Kochi</td>
                    <td>kerala</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>AVT Group</td>
                    <td>Kochi</td>
                    <td>kerala</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Dharani Food Products</td>
                    <td>Thrissu</td>
                    <td>kerala</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Pratap Group</td>
                    <td>Indore</td>
                    <td>Madhya Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ruchi Soya Industries Ltd</td>
                    <td>Indore</td>
                    <td>Madhya Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Anil Limited</td>
                    <td>Bhopal</td>
                    <td>Madhya Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Britannia Industries Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ruchi Soya Industries Ltd</td>
                    <td>Indore</td>
                    <td>Maharashtra</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Godrej Tyson Foods Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Manipur Food Industries Corporation Ltd</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Moirang Multi-Purpose Co-operative Society Ltd</td>
                    <td>Moirang</td>
                    <td>manipur</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Saheli Enterprise</td>
                    <td>Imphal</td>
                    <td>manipur</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Mega Food Park Pvt. Ltd</td>
                    <td>Byrnihat</td>
                    <td>Meghalaya</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Purbashree Foods Pvt. Ltd</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Lumding Agro Products Pvt. Ltd</td>
                    <td>Tura</td>
                    <td>Meghalaya</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Mizoram Food and Allied Industries Corporation Ltd</td>
                    <td>Aizawl</td>
                    <td>Mizoram</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Zoram Agro Industries Ltd</td>
                    <td>Aizawl</td>
                    <td>Mizoram</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Zoram Mega Food Park Pvt. Ltd</td>
                    <td>Kolasib</td>
                    <td>Mizoram</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Nagaland Agro Industries Corporation Ltd</td>
                    <td>Dimapur</td>
                    <td>Nagaland</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Nagaland Organic Products Pvt. Ltd</td>
                    <td>Dimapur</td>
                    <td>Nagaland</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>M/S Metro Food Products</td>
                    <td>Dimapur</td>
                    <td>Nagaland</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Orissa State Cooperative Milk Producers' Federation</td>
                    <td>Bhubaneswar</td>
                    <td>odisha</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Milk Mantra</td>
                    <td>Bhubaneswar</td>
                    <td>odisha</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Tribeni Tissues Limited</td>
                    <td>Bhubaneswar</td>
                    <td>odisha</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Verka (Punjab State Cooperative Milk Producers' Feder</td>
                    <td>Mohali</td>
                    <td>Punjab</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Bonn Group of Industries</td>
                    <td>Ludhiana</td>
                    <td>Punjab</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Markfed (Punjab State Cooperative Supply and Marketing Federation Ltd)</td>
                    <td>Chandigarh</td>
                    <td>Punjab</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Bikanervala</td>
                    <td>Jaipur</td>
                    <td>Rajasthan</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Haldiram's</td>
                    <td>Jaipur</td>
                    <td>Rajasthan</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Rajasthan Agro Product</td>
                    <td>Jaipur</td>
                    <td>Rajasthan</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Sikkim Milk Union</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Temi Tea Estate</td>
                    <td>Temi</td>
                    <td>Sikkim</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Denjong Beverages Pvt. Ltd</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Amul Dairy</td>
                    <td>Coimbatore</td>
                    <td>Tamil Nadu</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Aavin</td>
                    <td>Chennai
</td>
                    <td>Tamil Nadu</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Britannia Industries Ltd</td>
                    <td>
Chennai</td>
                    <td>Tamil Nadu</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Tripura Tea Development Corporation Ltd</td>
                    <td>Agartala
</td>
                    <td>Tripura</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>
Tripura Bamboo Mission</td>
                    <td>Agartala
</td>
                    <td>Tripura</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>tripura Agro Industries Corporation ltd </td>
                    <td>Agartala
</td>
                    <td>Tripura</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Amul Dairy</td>
                    <td>Lucknow
</td>
                    <td>Uttar Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Parle Products Pvt. Ltd</td>
                    <td>
Noida</td>
                    <td>Uttar Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>ITC Limited (Foods Division)</td>
                    <td>Lucknow</td>
                    <td>Uttar Pradesh</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Mother Dairy</td>
                    <td>Rudrapur</td>
                    <td>Uttarakhand</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Patanjali Ayurved Ltd</td>
                    <td>Rudrapur</td>
                    <td>Uttarakhand</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Parle Products Pvt. Ltd</td>
                    <td>Rudrapur</td>
                    <td>Uttarakhand</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Britannia Industries Ltd</td>
                    <td>Kolkata</td>
                    <td>bengal</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>Parle Products Pvt. Ltd</td>
                    <td>Kolkata</td>
                    <td>bengal</td>
                    <td>Food Industry</td>
                </tr>
<tr>
                    <td></td>
                    <td>ITC Limited (Foods Division)</td>
                    <td>Kolkata</td>
                    <td>bengal</td>
                    <td>Food Industry</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pharmazell India Private Limited, a group of axplora Ltd.</td>
                    <td>Viasakhapatnam</td>
                    <td>Andhra pradesh</td>
                    <td>pharmacy</td>
                </tr>
   <tr>
                    <td></td>
                    <td>Aurobindo Pharma Limited Unit XV Ltd.</td>
                    <td>Donkada</td>
                    <td>Andhra pradesh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Visakha Pharamacity Ltd.</td>
                    <td>Visakhapatnam</td>
                    <td>Andhra pradesh</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Trinika Enterprise Ltd.</td>
                    <td>Itanagar</td>
                    <td>Arunachal pradesh</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Care touch biomed solutions Ltd.</td>
                    <td>Nagarlagun</td>
                    <td>Arunachal pradesh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>North East Frontier Technical Ltd.</td>
                    <td>Aalo</td>
                    <td>Arunachal pradesh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>APY pharma Ltd.</td>
                    <td>Chhaygaon</td>
                    <td>Assam</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Ajanta pharma Ltd.</td>
                    <td>palasbari</td>
                    <td>Assam</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Syngex pharma Ltd.</td>
                    <td>Guwahati</td>
                    <td>Assam</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Un pharma Ltd.</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>SARP pharmaceutical Ltd.</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Home Remedies private Ltd.</td>
                    <td>Tehus</td>
                    <td>Bihar</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Alkem Loboratories Ltd.</td>
                    <td>Boloda Bazar</td>
                    <td>Chhattisgarh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
Shasun Pharmaceuticals Ltd.</td>
                    <td>Balod</td>
                    <td>Chhattisgarh</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>verna</td>
                    <td>Goa</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Alkem Laboratories Ltd.</td>
                    <td>verna</td>
                    <td>Goa</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Aurobindo Pharma Ltd.</td>
                    <td>Bicholim</td>
                    <td>Goa</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cadila Healthcare Ltd.</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Torrent Pharmaceuticals Ltd.</td>
                    <td>Gandhinagar</td>
                    <td>Gujarat</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Gandhinagar</td>
                    <td>Gujarat</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Sun Pharmaceutical Industries Ltd.

</td>
                    <td>Ambala</td>
                    <td>Haryana</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Mankind Pharma Ltd.



</td>
                    <td>Panchukula</td>
                    <td>Haryana</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
Ind-Swift Laboratories Ltd.</td>
                    <td>Ambala</td>
                    <td>Haryana</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Solan</td>
                    <td>Himachal Pradesh</td>
                    <td>pharmacy</td>
                </tr>



<tr>
                    <td></td>
                    <td>Lupin Ltd.</td>
                    <td>Solan</td>
                    <td>Himachal Pradesh</td>
                    <td>pharmacy</td>
                </tr>



<tr>
                    <td></td>
                    <td>Alkem Laboratories Ltd.</td>
                    <td>Solan</td>
                    <td>Himachal Pradesh</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Baidyanath Group

 Ltd.</td>
                    <td>Deoghar</td>
                    <td>Jharkhand</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Geno Pharmaceuticals Ltd.</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Savera Pharmaceuticals Pvt. Ltd.

</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Micro Labs Ltd.

</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Biocon Ltd.

</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Divi's Laboratories Ltd.

</td>
                    <td>Mysuru</td>
                    <td>Karnataka</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>HLL Lifecare Ltd.</td>
                    <td>Thiruvananthapuram</td>
                    <td>Kerala</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Drugs and Pharmaceuticals Ltd. </td>
                    <td>Alappuzha</td>
                    <td>Kerala</td>
                    <td>pharmacy</td>
                </tr>




<tr>
                    <td></td>
                    <td>Indoco Remedies Ltd.</td>
                    <td>Eranakulam</td>
                    <td>Kerala</td>
                    <td>pharmacy</td>
                </tr>



<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Raisen</td>
                    <td>Madhya Pradesh</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Ipca Laboratories Ltd.

</td>
                    <td>Dhar</td>
                    <td>Madhya Pradesh</td>
                    <td>pharmacy</td>
                </tr>




<tr>
                    <td></td>
                    <td>Intas Pharmaceuticals Ltd.</td>
                    <td>Indore</td>
                    <td>Madhya Pradesh</td>
                    <td>pharmacy</td>
                </tr>




<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Pune</td>
                    <td>Maharashtra</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Lupin Ltd.</td>
                    <td>Palghar</td>
                    <td>Maharashtra</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Wockardt Ltd.</td>
                    <td>Aurangabad</td>
                    <td>Maharashtra</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Emami Ltd.</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Zed Lifestyle Pvt. Ltd.

</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>pharmacy</td>
                </tr>


<tr>
                    <td></td>
                    <td>Santushti Pharmaceuticals Pvt. Ltd.

</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Meghalaya Industrial Development 

</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Meghalaya Medicinal Plants Board (MMPB)</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Meghalaya Institute of Natural Resources </td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Mizoram Drugs & Pharmaceuticals Ltd.

</td>
                    <td>Aizaw</td>
                    <td>Mizoram</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Mizoram Industrial Development Corporation (MIDC)

</td>
                    <td>Aizaw</td>
                    <td>Mizoram</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Mizoram University

 Ltd.

</td>
                    <td>Aizaw</td>
                    <td>Mizoram</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Nagaland Industrial Development Corporation Ltd.(NIDC)

</td>
                    <td>Lumani</td>
                    <td>Nagaland</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>North Eastern Development Finance Corporation Ltd. (NEDFi)

</td>
                    <td>Lumani</td>
                    <td>Nagaland</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>

Sun Pharmaceutical Industries Ltd.</td>
                    <td>Sambalpur</td>
                    <td>Odisha</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>

Cadila Healthcare Ltd. </td>
                    <td>Bhubaneswar</td>
                    <td>Odisha</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Macleods Pharmaceuticals Ltd. </td>
                    <td>Khurda</td>
                    <td>Odisha</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Sun Pharmaceutical Industries Ltd.

 </td>
                    <td>solan</td>
                    <td>Punjab</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Alembic Pharmaceuticals Ltd.</td>
                    <td>solan</td>
                    <td>Punjab</td>
                    <td>pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Intas Pharmaceuticals Ltd.</td>
                    <td>solan</td>
                    <td>Punjab</td>
                    <td>pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>

Sun Pharmaceutical Industries Ltd.</td>
                    <td>Jhalawar</td>
                    <td>Rajasthan</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
Jagsonpal Pharmaceuticals Ltd.

</td>
                    <td>Jaipur</td>
                    <td>Rajasthan</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Chemicals & Pharmaceuticals Ltd.</td>
                    <td>Udaipur</td>
                    <td>Rajasthan</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Cipla Ltd.</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Sun Pharmaceutical Industries Ltd.</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>
Zydus Cadila Healthcare Ltd.</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Sun Pharmaceutical Industries Ltd.</td>
                    <td>Chennai</td>
                    <td>Tamilnadu</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Aurobindo Pharma Ltd.</td>
                    <td>Chennai</td>
                    <td>Tamilnadu</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>
Torrent Pharmaceuticals Ltd.</td>
                    <td>Tirunelveli</td>
                    <td>Tamilnadu</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Dr. Reddy's Laboratories Ltd.</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Aurobindo Pharma Ltd.</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>
Divis Laboratories Ltd.</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Tulip Lab Pvt. Ltd.
</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
Chemical Works Ltd.
</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
TBL Pharmaceutical Ltd.</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Dr. Reddy's Laboratories Ltd.</td>
                    <td>Miryalaguda</td>
                    <td>Uttar Pradesh</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>Sun Pharmaceutical Industries Ltd.</td>
                    <td>Rudrapur</td>
                    <td>Uttar Pradesh</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Torrent Pharmaceutical Industries Ltd.</td>
                    <td>Dahej</td>
                    <td>Uttar Pradesh</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>Mankind Pharma Ltd.</td>
                    <td>Haridwar</td>
                    <td>Uttarakhand</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>
Zydus Cadila Healthcare Ltd.</td>
                    <td>Haridwar</td>
                    <td>Uttarakhand</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>


Torrent Pharmaceuticals Ltd.</td>
                    <td>Dehradun</td>
                    <td>Uttarakhand</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>GlenmarkPharmaceuticals Ltd.</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>Pharmacy</td>
                </tr>
<tr>
                    <td></td>
                    <td>
East India Pharmaceutical Works Ltd. </td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>Pharmacy</td>
                </tr>

<tr>
                    <td></td>
                    <td>
Bengal Chemicals & Pharmaceuticals Ltd.</td>
                    <td>Pimpri</td>
                    <td>West Bengal</td>
                    <td>Pharmacy</td>
                </tr>
                <tr>
                   <td></td>
                    <td>Prestige Group</td>
                    <td> Bangalore</td>
                    <td> Karnataka </td>
                    <td>Construction</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction </td>
                    <td>Bangalore</td>
                    <td>Karnataka</td>
                    <td>CONSTRUCTION</td>
                </tr>
                 <tr>
                    <td></td>
                    <td>BRIJ Constructions</td>
                    <td>Bangalore</td>
                    <td>Karnataka</td>
                    <td>CONSTRUCTION</td>
                 
                 <tr>
                    <td></td>
                    <td>NCC Limited</td>
                    <td>  Hyderabad</td>
                    <td>Telangana</td>
                    <td>CONSTRUCTION</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>JMC Projects (India) Ltd</td>
                    <td> Hyderabad</td>
                    <td>Telangana</td>
                    <td>CONSTRUCTION</td>
                </tr>
                 <tr>
                    <td></td>
                    <td>GMR Group</td>
                    <td> Hyderabad</td>
                    <td>Telangana</td>
                    <td>CONSTRUCTION</td>
                </tr>
                   <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction</td>
                    <td>Chennai.</td>
                    <td>TAMILNADU</td>
                    <td>CONSTRUCTION</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>Madhucon Projects Ltd</td>
                    <td> Chennai</td>
                    <td>TAMILNADU</td>
                    <td>CONSTRUCTION</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>Shapoorji Pallonji Group</td>
                    <td> Chennai.</td>
                    <td>TAMILNADU</td>
                    <td>CONSTRUCTION</td>
                </tr>
                 <tr>
                    <td></td>
                    <td>GVPR Engineers Limited</td>
                    <td>Visakhapatnam.</td>
                    <td>Andhra Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr>
                 <tr>
                    <td></td>
                    <td>L&T Construction</td>
                    <td>Visakhapatnam.</td>
                    <td>Andhra Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr>
                    <tr>
                    <td></td>
                    <td>Sree Vijayalakshmi Construction</td>
                    <td>Vijayawada</td>
                    <td>Andhra Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                  <tr>
                    <td></td>
                    <td>Sobha Limited</td>
                    <td> Kochi</td>
                    <td> Kerala</td>
                    <td>CONSTRUCTION</td>
                </tr>
                      <tr>
                    <td></td>
                    <td>VGN Homes</td>
                    <td> Kochi</td>
                    <td> Kerala</td>
                    <td>CONSTRUCTION</td>
                </tr>
                      <tr>
                    <td></td>
                    <td>Ravi Construction</td>
                    <td>Trivandrum</td>
                    <td> Kerala</td>
                    <td>CONSTRUCTION</td>
                </tr>
                       <tr>
                    <td></td>
                    <td>Kalpataru Limited </td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                    <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction </td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                     <tr>
                    <td></td>
                    <td>HCC (Hindustan Construction Company</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                  <tr>

                       <td></td>
 
                                   <td>HCC (Hindustan Construction Company)</td>
 
                                   <td>Berhampur</td>

                               <td>Odisha</td>
 
                              <td>CONSTRUCTION</td>
</tr>
                 <tr>
                    <td></td>
                    <td>Sarla Construction Ltd</td>
                    <td>Bhubaneswar</td>
                    <td>Odisha</td>
                    <td>CONSTRUCTION</td>
                </tr>
                 <tr>
                    <td></td>
                    <td>G. D. Construction </td>
                    <td>Bhubaneswar</td>
                    <td>Odisha</td>
                    <td>CONSTRUCTION</td>
                </tr>
              <tr>
                    <td></td>
                    <td>B. R. Construction</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>CONSTRUCTION</td>
                </tr>    
              <tr>
                    <td></td>
                    <td>Dineshchandra R. Agrawal Infrastructure Ltd</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>CONSTRUCTION</td>
                </tr>      
               <tr>
                    <td></td>
                    <td>K. C. Construction</td>
                    <td>Korba</td>
                    <td>Chhattisgarh</td>
                    <td>CONSTRUCTION</td>
                </tr>            
                 <tr>
                    <td></td>
                    <td>Sushma Construction</td>
                    <td> Indore</td>
                    <td>Madhya Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr>                      
                  <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction</td>
                    <td>Bhopal</td>
                    <td>Madhya Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr>                     
              <tr>
                    <td></td>
                    <td>JMC Projects (India) Ltd</td>
                    <td> Bhopal</td>
                    <td>Madhya Pradesh</td>
                    <td>CONSTRUCTION</td>
                </tr>      
                 <tr>
                    <td></td>
                    <td>JMC Projects (India) Ltd.</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>CONSTRUCTION</td>
                </tr>
                    <tr>
                    <td></td>
                    <td>Adani Group</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>CONSTRUCTION</td>
                </tr>
                   <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>CONSTRUCTION</td>
                </tr>         
                  <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>CONSTRUCTION</td>
                </tr>
                   <tr>
                    <td></td>
                    <td>Simplex Infrastructures Limited</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>CONSTRUCTION</td>
                </tr>
                     <tr>
                    <td></td>
                    <td>Shapoorji Pallonji & Co. Ltd</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>CONSTRUCTION</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>Jai Prakash Associates Ltd. (JPAL)</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>CONSTRUCTION</td>
                </tr>
                  <tr>
                    <td></td>
                    <td>S. S. Construction</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>CONSTRUCTION</td>
                </tr>
              <tr>
                    <td></td>
                    <td>Ravi Construction</td>
                    <td>Dhanbad</td>
                    <td>Jharkhand</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                <tr>
                    <td></td>
                    <td>Sanjay Construction</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>CONSTRUCTION</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jain Construction Company</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>CONSTRUCTION</td>
                </tr> 
                <tr>
                    <td></td>
                    <td>Gaurav Engineering Works</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>CONSTRUCTION</td>
                </tr>
               <tr>
                    <td></td>
                    <td>Larsen & Toubro (L&T) Construction</td>
                    <td>Jaipur</td>
                    <td> Rajasthan</td>
                    <td>CONSTRUCTION</td>
                </tr><tr>

                    <td></td>
                    
                    <td>Nagarjuna Construction Company (NCC)</td>
                    <td>Jaipur</td>
                    <td> Rajasthan</td>
                    <td>CONSTRUCTION</td>
                </tr>
                   <tr>
                    <td></td>
                    <td>Pace Developers</td>
                    <td>Jaipur</td>
                    <td> Rajasthan</td>
                    <td>CONSTRUCTION</td>
                     <td></td>
                      </tr>
                     <tr>
                    <td></td>
                    <td>Richa Construction Company</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>CONSTRUCTION</td>
                     <td></td>
                      </tr>  
            <tr>
                    <td></td>
                    <td>Nepal Construction Company</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>CONSTRUCTION</td>
                     <td></td>
                      </tr>             
              <tr>
                    <td></td>
                    <td>M. N. Construction</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>CONSTRUCTION</td>
                     <td></td>
                      </tr> 
                  <tr>
    <td></td>
    <td>Mizoram State Infrastructure Development Corporation (MSIDC)</td>
    <td>Aizawl</td>
    <td>Mizoram</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Mizoram Public Works Department (PWD)</td>
    <td>Aizawl</td>
    <td>Mizoram</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Mizoram Industrial Development Corporation (MIDC)</td>
    <td>Aizawl</td>
    <td>Mizoram</td>
    <td>CONSTRUCTION</td>
</tr>
   <tr>
    <td></td>
    <td>Manipur State Construction Corporation Limited (MSCCL)</td>
    <td>Imphal</td>
    <td>Manipur</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Manipur Public Works Department (PWD)</td>
    <td>Imphal</td>
    <td>Manipur</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Manipur State Power Distribution Company Limited (MSPDCL)</td>
    <td>Imphal</td>
    <td>Manipur</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Meghalaya Public Works Department (PWD)</td>
    <td>Shillong</td>
    <td>Meghalaya</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Meghalaya State Housing Finance and Development Corporation (MSHFDC)</td>
    <td>Shillong</td>
    <td>Meghalaya</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Nongstoin Construction Company</td>
    <td>Shillong</td>
    <td>Meghalaya</td>
    <td>CONSTRUCTION</td>
</tr>
         <tr>
    <td></td>
    <td>Arunachal Pradesh State Infrastructure Development and Finance Corporation (APSIDFC)</td>
    <td>Itanagar</td>
    <td>Arunachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Arunachal Pradesh Public Works Department (PWD)</td>
    <td>Itanagar</td>
    <td>Arunachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Northeast Frontier Railways (NFR)</td>
    <td>Itanagar</td>
    <td>Arunachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>
           <tr>
    <td></td>
    <td>Assam State Construction Corporation Limited (ASCCL)</td>
    <td>Guwahati</td>
    <td>Assam</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Assam Public Works Department (PWD)</td>
    <td>Guwahati</td>
    <td>Assam</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Assam Industrial Development Corporation (AIDC)</td>
    <td>Guwahati</td>
    <td>Assam</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Tripura State Construction Corporation Limited (TSCCL)</td>
    <td>Agartala</td>
    <td>Tripura</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Tripura Public Works Department (PWD)</td>
    <td>Agartala</td>
    <td>Tripura</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Tripura Industrial Development Corporation (TIDC)</td>
    <td>Agartala</td>
    <td>Tripura</td>
    <td>CONSTRUCTION</td>
</tr>
     <tr>
    <td></td>
    <td>Uttar Pradesh State Construction and Infrastructure Development Corporation (UPSIDC)</td>
    <td>Lucknow</td>
    <td>Uttar Pradesh</td>
    <td>CONSTRUCTION </td>
</tr>
<tr>
    <td></td>
    <td>Uttar Pradesh Public Works Department (PWD)</td>
    <td>Lucknow</td>
    <td>Uttar Pradesh</td>
    <td>CONSTRUCTION </td>
</tr>
<tr>
    <td></td>
    <td>Uttar Pradesh State Industrial Development Corporation (UPSIDC)</td>
    <td>Lucknow</td>
    <td>Uttar Pradesh</td>
    <td>CONSTRUCTION </td>

<tr>
    <td></td>
    <td>L&T Construction</td>
    <td>Gurgaon</td>
    <td>Haryana</td>
    <td>CONSTRUCTION</td>
</tr>

<tr>
    <td></td>
    <td>Simplex Infrastructures Limited</td>
    <td>Ambala</td>
    <td>Haryana</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Haryana Construction Company</td>
    <td>Hisar</td>
    <td>Haryana</td>
    <td>CONSTRUCTION</td>
</tr>
</tr>
 
</tr>
<tr>
    <td></td>
    <td>Shapoorji Pallonji & Co. Ltd.</td>
    <td>Delhi</td>
    <td>Delhi</td>
    <td>CONSTRUCTION</td>
</tr>

<tr>
    <td></td>
    <td>Gammon India Limited</td>
    <td>Delhi</td>
    <td>Delhi</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Simplex Infrastructures Limited</td>
    <td>Delhi</td>
    <td>Delhi</td>
    <td>CONSTRUCTION</td>
</tr>
      <tr>
    <td></td>
    <td>Himachal Pradesh Road Transport Corporation (HRTC)</td>
    <td>Shimla</td>
    <td>Himachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Simplex Infrastructures Limited</td>
    <td>Solan</td>
    <td>Himachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>

<tr>
    <td></td>
    <td>JMC Projects (India) Ltd.</td>
    <td>Kullu</td>
    <td>Himachal Pradesh</td>
    <td>CONSTRUCTION</td>
</tr>
 <tr>
    <td></td>
    <td>Jammu and Kashmir Projects Construction Corporation Ltd.</td>
    <td>Jammu</td>
    <td>Jammu and Kashmir</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>IRCON International Ltd.</td>
    <td>Srinagar</td>
    <td>Jammu and Kashmir</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>HCC (Hindustan Construction Company)</td>
    <td>Jammu</td>
    <td>Jammu and Kashmir</td>
    <td>CONSTRUCTION</td>
</tr>
      <tr>
    <td></td>
    <td>Goa State Infrastructure Development Corporation (GSIDC)</td>
    <td>Panjim</td>
    <td>Goa</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Vikram Group</td>
    <td>Margao</td>
    <td>Goa</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Ravi Group</td>
    <td>Panjim</td>
    <td>Goa</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Spanco Limited</td>
    <td>Amritsar</td>
    <td>Punjab</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>JMC Projects (India) Ltd.</td>
    <td>Ludhiana</td>
    <td>Punjab</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Simplex Infrastructures Limited</td>
    <td>Patiala</td>
    <td>Punjab</td>
    <td>CONSTRUCTION</td>
</tr>
           <tr>
    <td></td>
    <td>Uttarakhand Peyjal Nigam Ltd.</td>
    <td>Dehradun</td>
    <td>Uttarakhand</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
    <td></td>
    <td>Himalayan Construction Company</td>
    <td>Haridwar</td>
    <td>Uttarakhand</td>
    <td>CONSTRUCTION</td>
</tr>

<tr>
    <td></td>
    <td>Simplex Infrastructures Limited</td>
    <td>Roorkee</td>
    <td>Uttarakhand</td>
    <td>CONSTRUCTION</td>
</tr>
<tr>
                    <td></td>
                    <td>Vasantha Industries Private Limited (VIPL)</td>
                    <td>Thimmapuram</td>
                    <td>Andhra Pradesh</td>
                    <td>Textile</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sree Lalitha Parameswari Spinning Mills Pvt Ltd</td>
                    <td>Chebrolu</td>
                    <td>Andhra Pradesh</td>
                    <td>Textile</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kallam Textiles Ltd.</td>
                    <td>Pothur</td>
                    <td>Andhra Pradesh</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Loyal Textile Mills Ltd (Unit - Shri Vishala Textile Mills )</td>
                    <td>Menakuru</td>
                    <td>Andhra Pradesh</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Assam Co-operative Jute Mills Ltd</td>
                    <td>Silghat, Nagaon district</td>
                    <td>Assam</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Assam Silk Mills Corporation Ltd</td>
                    <td>Sualkuchi, Kamrup district</td>
                    <td>Assam</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>
Assam Textile Institute</td>
                    <td>Ambari, Guwahati, Kamrup Metropolitandistrict</td>
                    <td>Assam</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Nagaon Paper Mill</td>
                    <td>Jagiroad, Morigaon district</td>
                    <td>Assam</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>NSL Textiles Limited</td>
                    <td>Hydrabad</td>
                    <td>Telangana</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Parekh Textiles (P) Ltd</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>M/s Divya Textiles Industries</td>
                    <td>Alimiyakunta</td>
                    <td>Telangana</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Narendra Textiles Pvt Ltd</td>
                    <td>Hyderabad</td>
                    <td>Telangana</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Universal Textile Mills & Jaipuria Silk Mills Private Limited</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>TR Mills</td>
                    <td>Bengaluru</td>
                    <td>Karnataka</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Lakshmi Mills</td>
                    <td>Coimbatore</td>
                    <td>Tamil Nadu</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Ambika Cotton Mills</td>
                    <td>Coimbatore</td>
                    <td>Tamil Nadu</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Super Spinning Mills Ltd</td>
                    <td>Coimbatore</td>
                    <td>Tamil Nadu</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>The Chennai Silks</td>
                    <td>Chennai</td>
                    <td>Tamil Nadu</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Arvind Limited</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Textile</td>
                </tr> <tr>
                    <td></td>
                    <td>Nandan Denim Ltd</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Ashima Group</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Aarvee Denims & Exports Ltd</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Century Textiles & Industries Ltd</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Raymond Ltd</td>
                    <td>Mumbai</td>
                    <td>Mumbai</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Bombay Dyeing & Manufacturing Co. Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Morarjee Textiles Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Garden Silk Mills Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Silk Mills Ltd</td>
                    <td>Mumbai</td>
                    <td>Maharashtra</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Ziro Valley Textile Industry</td>
                    <td>Ziro</td>
                    <td>Arunachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Bhawani Textiles</td>
                    <td>Pasighat</td>
                    <td>Arunachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Arunachal Pradesh Handloom & Handicrafts Development Corporation Ltd.
(APHHDC)</td>
                    <td>Itanagar</td>
                    <td>Arunachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Arunachal Textile Industries</td>
                    <td>Tezu</td>
                    <td>Arunachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Bihar State Textile Corporation Ltd.</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Mangalam Cotton Mills Ltd.</td>
                    <td>Darbhanga</td>
                    <td>Bihar</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Bhagalpur Silk Weavers  Cooperative Society Ltd.</td>
                    <td>Bhagalpur</td>
                    <td>Bihar
</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>New Allenberry Works</td>
                    <td>Muzaffarpur</td>
                    <td>Bihar</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>
Patna Textile Private Limited</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Raipur Textile Cluster</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Chhattisgarh</td>
                    <td>Bhilai</td>
                    <td>Chhattisgarh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Mahavir Spinning Mills Ltd</td>
                    <td>Rajnandgaon</td>
                    <td>Chhattisgarh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Chhattisgarh Textile Mills Association</td>
                    <td>Raipur</td>
                    <td>Chhattisgarh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Goa Garment Manufacturers and Exporters Association</td>
                    <td>Panaji</td>
                    <td>Goa</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Arun Industries</td>
                    <td>Verna Industrial Estate</td>
                    <td>Goa</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>
Linen Club (Part of Aditya Birla Group)</td>
                    <td>Kundaim Industrial Estate</td>
                    <td>Goa</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Goa Textile and Apparel Association (GTAA)</td>
                    <td>Panaji</td>
                    <td>Goa</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Vardhman Textiles Ltd</td>
                    <td>Baddi</td>
                    <td>Haryana</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Oswal Woollen Mills Ltd</td>
                    <td>Ludhiana</td>
                    <td>Haryana</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Nahar Spinning Mills Ltd</td>
                    <td>Ludhiana</td>
                    <td>Haryana</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Trident Group</td>
                    <td>Barnala</td>
                    <td>Haryana</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>SEL Manufacturing Company Ltd</td>
                    <td>Ludhiana</td>
                    <td>Haryana</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Vardhman Textiles Ltd</td>
                    <td>Baddi</td>
                    <td>Himachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Nahar Spinning Mills Ltd</td>
                    <td>Solan</td>
                    <td>Himachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Oswal Woollen Mills Ltd</td>
                    <td>Ludhiana</td>
                    <td>Himachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Trident Group</td>
                    <td>Barnala</td>
                    <td>Himachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>SEL Manufacturing Company Ltd</td>
                    <td>Barnala</td>
                    <td>Himachal Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Bokaro Textiles Ltd</td>
                    <td>Bokaro</td>
                    <td>Jharkhand</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Jharkhand</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Usha Martin Industries Ltd</td>
                    <td>Ranchi</td>
                    <td>Jharkhand</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Tata Steel Ltd. (Ferro Alloys & Minerals Division) </td>
                    <td>Jamshedpur</td>
                    <td>Jharkhand</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Kerala State Textile Corporation </td>
                    <td>Alleppey</td>
                    <td>Kerala</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Traco Cable Company Ltd </td>
                    <td>Thrissur</td>
                    <td>Kerala</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Kerala State Textile Corporation </td>
                    <td>Kochi</td>
                    <td>Kerala</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Cochin Textile Mills </td>
                    <td>Ernakulam</td>
                    <td>Ernakulam</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Grasim Industries Ltd</td>
                    <td>Ernakulam</td>
                    <td>Madhya Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Suryalakshmi Cotton Mills Ltd </td>
                    <td>Burhanpur</td>
                    <td>Madhya Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Vardhman Textiles Ltd</td>
                    <td>Pithampur</td>
                    <td>Madhya Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> The Manipur Handlooms & Handicrafts Development Corporation Ltd</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Manipur Apex Handloom Weavers & Handicrafts Artisans Cooperative
Society Ltd </td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> 
Manipur Handloom Development Corporation Ltd</td>
                    <td>Imphal</td>
                    <td>Manipur</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Meghalaya Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Tura</td>
                    <td>Meghalaya</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>
Garo Hills Handloom & Handicrafts Development Corporation Ltd </td>
                    <td>Tura
</td>
                    <td>Meghalaya</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Khasi Hills Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Shillong</td>
                    <td>Meghalaya</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Mizoram Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Aizawl</td>
                    <td>Mizoram</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Mizoram Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Lunglei</td>
                    <td>Mizoram</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Nagaland Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Dimapur</td>
                    <td>Nagaland</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Nagaland Handloom & Handicrafts Development Corporation Ltd </td>
                    <td>Kohima</td>
                    <td>Nagaland</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Nagaland Handloom & Handicrafts Development Corporation</td>
                    <td>Mokokchung</td>
                    <td>Nagaland</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Nagaland Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Tuensang</td>
                    <td>Nagaland</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Jayashree Textiles </td>
                    <td>Rourkela</td>
                    <td>Odisha</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Orissa Textile Mills </td>
                    <td>Bhubaneswar</td>
                    <td>Odisha</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> National Textile Corporation (NTC) Ltd</td>
                    <td>Cuttack</td>
                    <td>Odisha</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Trident Group </td>
                    <td>Barnala</td>
                    <td>Punjab</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Nahar Spinning Mills Ltd</td>
                    <td>Ludhiana</td>
                    <td>Punjab</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Oswal Woollen Mills Ltd</td>
                    <td>Ludhiana</td>
                    <td>Punjab</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Rajasthan Textile Mills</td>
                    <td>Bhilwara</td>
                    <td>Rajasthan</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> RSWM Ltd. (LNJ Bhilwara Group)</td>
                    <td>Bhilwara</td>
                    <td>Rajasthan</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td> Sutlej Textiles and Industries Ltd</td>
                    <td>Bhilwara</td>
                    <td>Rajasthan</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Sikkim Textiles Ltd </td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Sikkim Handloom and Handicrafts Development  Corporation Ltd</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Sikkim Silk House</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Sikkim Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Gangtok</td>
                    <td>Sikkim</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Tripura Handloom & Handicrafts Development Corporation Ltd</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Tripura State Co-operative Handloom and Handicrafts Federation Ltd</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Tripura Textile Development Corporation Ltd</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Tripura Small Industries Corporation Ltd</td>
                    <td>Agartala</td>
                    <td>Tripura</td>
                    <td>Textile</td>

                </tr><tr>
                    <td></td>
                    <td>Reliance Industries Ltd</td>
                    <td>Noida</td>
                    <td>Uttar Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Grasim Industries Ltd. (Textile Division)</td>
                    <td>Kanpur</td>
                    <td>Uttar Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Indian Textile Industries</td>
                    <td>Kanpur</td>
                    <td>Uttar Pradesh</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Birla Corporation Ltd. (Jute Division)</td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>National Jute Manufacturers Corporation Ltd. (NJMC) </td>
                    <td>Kolkata</td>
                    <td>West Bengal</td>
                    <td>Textile</td>
                </tr><tr>
                    <td></td>
                    <td>Hooghly Mills Projects Ltd</td>
                    <td>Hooghly</td>
                    <td>West Bengal</td>
                    <td>Textile</td>
                </tr>
                </tr> <tr>
                    <td></td>
                    <td>Accenture</td>
                    <td>Visakhapatnam </td>
                    <td> Andhra Pradesh</td>
                    <td>Software</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Wipro</td>
                    <td>Visakhapatnam </td>
                    <td>Andhra Pradesh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>DigiTech </td>
                    <td> Itanagar</td>
                    <td>Arunachal Pradesh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Forte Solutions</td>
                    <td>Naharlagun</td>
                    <td>Arunachal Pradesh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>TechYug</td>
                    <td> Pasighat</td>
                    <td>Arunachal Pradesh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>AssamTech</td>
                    <td> Guwahati</td>
                    <td>Assam</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Silicon Institute of Technology </td>
                    <td> Guwahati</td>
                    <td>Assam</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Techno-Impact</td>
                    <td>Dibrugarh</td>
                    <td>Assam</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Bihar IT Services </td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>E-Soft Technologies</td>
                    <td>Patna</td>
                    <td>Bihar</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>TechBihar</td>
                    <td>Gaya</td>
                    <td>Bihar</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td> Aegis Technology </td>
                    <td>Raipur</td>
                    <td> Chhattisgarh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td> Tech Mahindra</td>
                    <td>Bhilai</td>
                    <td> Chhattisgarh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Infoline Software</td>
                    <td>Bilaspur</td>
                    <td> Chhattisgarh</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Agilysys</td>
                    <td>Panaji</td>
                    <td> Goa</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Vinsys IT Services</td>
                    <td>Margao</td>
                    <td> Goa</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td> CloudZon</td>
                    <td>Ponda</td>
                    <td> Goa</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>eInfochips</td>
                    <td>Ahmedabad</td>
                    <td>Gujarat</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td> Infostretch</td>
                    <td>Surat</td>
                    <td>Gujarat</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>GEP Worldwide</td>
                    <td>Vadodara</td>
                    <td>Gujarat</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>Dell Technologies</td>
                    <td>Gurgaon</td>
                    <td> Haryana</td>
                    <td>Software</td>
                </tr>  <tr>
                    <td></td>
                    <td>FCS Software Solutions</td>
                    <td>Faridabad</td>
                    <td> Haryana</td>
                    <td>Software</td>
                </tr>
                  <tr>
                   <td></td>
                    <td>Ojasvi Technologies</td>
                    <td>Ambala</td>
                    <td> Haryana </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Appy Pie</td>
                    <td>Shimla</td>
                    <td>Himachal Pradesh </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Techno Hub</td>
                    <td>Dharamshala</td>
                    <td> Himachal Pradesh</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Web Development Services</td>
                    <td>Manali</td>
                    <td> Himachal Pradesh</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Innowise Group</td>
                    <td>Ranchi</td>
                    <td>Jharkhand </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Cybrom</td>
                    <td>Jamshedpur</td>
                    <td>Jharkhand </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Axiom IT Solutions</td>
                    <td>Dhanbad</td>
                    <td> Jharkhand</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>TCS</td>
                    <td>Bangalore</td>
                    <td> Karnataka </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Cyber Security Solutions</td>
                    <td>Mysore</td>
                    <td>  Karnataka</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> GITAM University Software Solutions</td>
                    <td>Mangalore</td>
                    <td> Karnataka </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>IBS Software</td>
                    <td>Kochi</td>
                    <td>Kerala </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>InApp</td>
                    <td>Thiruvananthapuram</td>
                    <td>Kerala </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> C-DIT</td>
                    <td>Kozhikode</td>
                    <td>Kerala </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> WebGuru Infosystems</td>
                    <td>Indore</td>
                    <td>Madhya Pradesh</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Cybersecurity Solutions</td>
                    <td>Bhopal</td>
                    <td> Madhya Pradesh </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> C-Tech Solutions</td>
                    <td>Gwalior</td>
                    <td> Madhya Pradesh </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Cognizant</td>
                    <td>Mumbai</td>
                    <td> Maharashtra </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Persistent Systems</td>
                    <td>Pune</td>
                    <td> Maharashtra </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> JBM Technologies
</td>
                    <td>Nashik</td>
                    <td>  Maharashtra</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Manipur State IT Society</td>
                    <td>Imphal</td>
                    <td>  Manipur</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>WebMasta</td>
                    <td>Churachandpur</td>
                    <td>  Manipur</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Appcino Technologies</td>
                    <td>Thoubal</td>
                    <td> Manipur </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Tech Know</td>
                    <td>Shillong</td>
                    <td> Meghalaya</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> 7Hills IT Solutions</td>
                    <td>Tura</td>
                    <td>Meghalaya </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>MCT Technologies</td>
                    <td>Jowai</td>
                    <td> Meghalaya</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>MizoTech</td>
                    <td>Aizawl</td>
                    <td>Mizoram </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> DCM Technology</td>
                    <td>Lunglei</td>
                    <td> Mizoram</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>NexGen IT Solutions</td>
                    <td>Champhai</td>
                    <td>Mizoram </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Nagaland State IT & E Governance Society</td>
                    <td>Kohima</td>
                    <td> Nagaland</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>World Wide Web Solutions</td>
                    <td>Dimapur</td>
                    <td>Nagaland </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> NagaTech Solutions</td>
                    <td>Mon</td>
                    <td>Nagaland </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Mindfire Solutions</td>
                    <td>Bhubaneswar</td>
                    <td> Odisha </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Syscom Technologies
</td>
                    <td>Cuttack</td>
                    <td> Odisha </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>JBC Technologies</td>
                    <td>Berhampur</td>
                    <td> Odisha </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Quark Software</td>
                    <td>Chandigarh</td>
                    <td> Punjab</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Webworld Experts</td>
                    <td>Ludhiana</td>
                    <td>Punjab </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> CoderSprout</td>
                    <td>Amritsar</td>
                    <td>Punjab </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Quick Heal Technologies</td>
                    <td>Jaipur</td>
                    <td>  CoderSprout</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Aroha Technologies</td>
                    <td>Udaipur</td>
                    <td> CoderSprout </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Nirmal Technologies</td>
                    <td>Jodhpur</td>
                    <td> CoderSprout </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Sikkim Digital</td>
                    <td>Gangtok</td>
                    <td>  Sikkim</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Neelkanth Technologies</td>
                    <td>Namchi</td>
                    <td>  Sikkim</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Eco-IT Solutions</td>
                    <td>Gyalshing</td>
                    <td>  Sikkim</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Zoho Corporation</td>
                    <td>Chennai</td>
                    <td>Tamil Nadu </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Saviom</td>
                    <td>Coimbatore</td>
                    <td>Tamil Nadu </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Arogyam Technologies</td>
                    <td>Madurai</td>
                    <td> Tamil Nadu</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Microsoft India</td>
                    <td>Hyderabad</td>
                    <td> Telangana</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> EDP Solutions</td>
                    <td>Warangal</td>
                    <td>Telangana </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>TeraTech Solutions</td>
                    <td>Nizamabad</td>
                    <td> Telangana</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Tripura IT & E Governance Society</td>
                    <td>Agartala</td>
                    <td> Tripura </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Data Soft Technologies</td>
                    <td>Unakoti</td>
                    <td> Tripura </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Tripura IT Solutions</td>
                    <td>Dhalai</td>
                    <td> Tripura </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>NIIT</td>
                    <td>Noida</td>
                    <td> Uttar Pradesh </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>CyberSecurIT</td>
                    <td>Lucknow</td>
                    <td> Uttar Pradesh </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Daffodil Software</td>
                    <td>Ghaziabad</td>
                    <td>  Uttar Pradesh</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> Pahal IT Solutions</td>
                    <td>Dehradun</td>
                    <td> Uttarakhand</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td> IT Solutions Hub</td>
                    <td>Haridwar</td>
                    <td>Uttarakhand </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Brainwave Solutions</td>
                    <td>Nainital</td>
                    <td> Uttarakhand</td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Wipro</td>
                    <td>Kolkata</td>
                    <td> West Bengal </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>TechnoVision Solutions</td>
                    <td>Siliguri</td>
                    <td> West Bengal </td>
                    <td>Software</td>
                </tr><tr>
                   <td></td>
                    <td>Ceyone Technologies</td>
                    <td>Durgapur</td>
                    <td> West Bengal </td>
                    <td>Software</td>
                </tr>


            </tbody>
        </table>
        <p id="noData" style="display:none;">No data found</p>
    </div>
    <script src="<?=$action->helper->loadjs('companies.js')?>"></script>
</body>
</html>
