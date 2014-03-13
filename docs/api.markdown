# API

GET    /nedi
GET    /nedi/log
GET    /nedi/log/{id}
DELETE /nedi/log/{id}
POST   /nedi/discover

GET    /device
GET    /device/{deviceName}
GET    /device/{deviceName}/interfaces
GET    /device/{deviceName}/modules
GET    /device/{deviceName}/events
GET    /device/{deviceName}/links
GET    /device/{deviceName}/nodes
GET    /device/{deviceName}/topology
POST   /device/{deviceName}/discover
DELETE /device/{deviceName}
POST   /device

GET /link
GET /link/{id}

GET    /event
GET    /event/{id}
DELETE /event/{id}

GET  /interface
GET  /interface/{deviceName}/{interfaceName}
GET  /interface/{deviceName}/{interfaceName}/iptrack
GET  /interface/{deviceName}/{interfaceName}/nodetrack
POST /interface/{deviceName}/{interfaceName}/status

/module
/module/{deviceName}/{slot}

/node
/node/{mac}
/node/{mac}/iftrack
/node/{mac}/iptrack
/node/{mac}/topology

/vlan
/vlan/{vlan-id}

/ip
/ip/{address}
/ip/{address}/nodetrack