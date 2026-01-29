<?php

return [
    // 1xx: Informational
    "100" => [
        "title" => "Continue",
        "description" => "The server has received the request headers and the client should proceed to send the request body.",
    ],
    "101" => [
        "title" => "Switching Protocols",
        "description" => "The requester has asked the server to switch protocols.",
    ],
    "102" => [
        "title" => "Processing",
        "description" => "The server has received and is processing the request, but no response is available yet.",
    ],
    "103" => [
        "title" => "Early Hints",
        "description" => "Used to return some response headers before final HTTP message.",
    ],

    // 2xx: Success
    "200" => [
        "title" => "OK",
        "description" => "The request has succeeded.",
    ],
    "201" => [
        "title" => "Created",
        "description" => "The request has been fulfilled and has resulted in a new resource being created.",
    ],
    "202" => [
        "title" => "Accepted",
        "description" => "The request has been accepted for processing, but the processing has not been completed.",
    ],
    "203" => [
        "title" => "Non-Authoritative Information",
        "description" => "The server is a transforming proxy that received a 200 OK from its origin, but is returning a modified version of the origin's response.",
    ],
    "204" => [
        "title" => "No Content",
        "description" => "The server successfully processed the request and is not returning any content.",
    ],
    "205" => [
        "title" => "Reset Content",
        "description" => "The server successfully processed the request, but is not returning any content and requires that the requester reset the document view.",
    ],
    "206" => [
        "title" => "Partial Content",
        "description" => "The server is delivering only part of the resource due to a range header sent by the client.",
    ],
    "207" => [
        "title" => "Multi-Status",
        "description" => "The message body that follows is by default an XML message and can contain a number of separate response codes.",
    ],
    "208" => [
        "title" => "Already Reported",
        "description" => "The members of a DAV binding have already been enumerated in a preceding part of the multi-status response.",
    ],
    "226" => [
        "title" => "IM Used",
        "description" => "The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.",
    ],

    // 3xx: Redirection
    "300" => [
        "title" => "Multiple Choices",
        "description" => "Indicates multiple options for the resource from which the client may choose.",
    ],
    "301" => [
        "title" => "Moved Permanently",
        "description" => "This and all future requests should be directed to the given URI.",
    ],
    "302" => [
        "title" => "Found",
        "description" => "The resource was found, but at a different URI temporarily.",
    ],
    "303" => [
        "title" => "See Other",
        "description" => "The response to the request can be found under another URI using the GET method.",
    ],
    "304" => [
        "title" => "Not Modified",
        "description" => "Indicates that the resource has not been modified since the version specified by the request headers.",
    ],
    "305" => [
        "title" => "Use Proxy",
        "description" => "The requested resource is available only through a proxy, the address for which is provided in the response.",
    ],
    "307" => [
        "title" => "Temporary Redirect",
        "description" => "The request should be repeated with another URI; however, future requests should still use the original URI.",
    ],
    "308" => [
        "title" => "Permanent Redirect",
        "description" => "The request and all future requests should be repeated using another URI.",
    ],

    // 4xx: Client Error
    "400" => [
        "title" => "Bad Request",
        "description" => "The server could not understand the request due to invalid syntax.",
    ],
    "401" => [
        "title" => "Unauthorized",
        "description" => "The client must authenticate itself to get the requested response.",
    ],
    "402" => [
        "title" => "Payment Required",
        "description" => "Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micro-payment scheme.",
    ],
    "403" => [
        "title" => "Forbidden",
        "description" => "The client does not have access rights to the content.",
    ],
    "404" => [
        "title" => "Not Found",
        "description" => "The server can not find the requested resource.",
    ],
    "405" => [
        "title" => "Method Not Allowed",
        "description" => "The request method is known by the server but has been disabled and cannot be used.",
    ],
    "406" => [
        "title" => "Not Acceptable",
        "description" => "The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request.",
    ],
    "407" => [
        "title" => "Proxy Authentication Required",
        "description" => "The client must first authenticate itself with the proxy.",
    ],
    "408" => [
        "title" => "Request Timeout",
        "description" => "The server timed out waiting for the request.",
    ],
    "409" => [
        "title" => "Conflict",
        "description" => "The request could not be completed due to a conflict with the current state of the target resource.",
    ],
    "410" => [
        "title" => "Gone",
        "description" => "The requested content has been permanently deleted from server, with no forwarding address.",
    ],
    "411" => [
        "title" => "Length Required",
        "description" => "The server rejects the request because the Content-Length header field is not defined and the server requires it.",
    ],
    "412" => [
        "title" => "Precondition Failed",
        "description" => "The client has indicated preconditions in its headers which the server does not meet.",
    ],
    "413" => [
        "title" => "Payload Too Large",
        "description" => "Request entity is larger than limits defined by server.",
    ],
    "414" => [
        "title" => "URI Too Long",
        "description" => "The URI requested by the client is longer than the server is willing to interpret.",
    ],
    "415" => [
        "title" => "Unsupported Media Type",
        "description" => "The media format of the requested data is not supported by the server.",
    ],
    "416" => [
        "title" => "Range Not Satisfiable",
        "description" => "The range specified by the Range header field in the request cannot be fulfilled.",
    ],
    "417" => [
        "title" => "Expectation Failed",
        "description" => "The expectation indicated by the Expect request header field cannot be met by the server.",
    ],
    "418" => [
        "title" => "I'm a teapot",
        "description" => "The server refuses the attempt to brew coffee with a teapot.",
    ],
    "421" => [
        "title" => "Misdirected Request",
        "description" => "The request was directed at a server that is not able to produce a response.",
    ],
    "422" => [
        "title" => "Unprocessable Entity",
        "description" => "The request was well-formed but was unable to be followed due to semantic errors.",
    ],
    "423" => [
        "title" => "Locked",
        "description" => "The resource that is being accessed is locked.",
    ],
    "424" => [
        "title" => "Failed Dependency",
        "description" => "The request failed due to failure of a previous request.",
    ],
    "425" => [
        "title" => "Too Early",
        "description" => "Indicates that the server is unwilling to risk processing a request that might be replayed.",
    ],
    "426" => [
        "title" => "Upgrade Required",
        "description" => "The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.",
    ],
    "428" => [
        "title" => "Precondition Required",
        "description" => "The origin server requires the request to be conditional.",
    ],
    "429" => [
        "title" => "Too Many Requests",
        "description" => "The user has sent too many requests in a given amount of time.",
    ],
    "431" => [
        "title" => "Request Header Fields Too Large",
        "description" => "The server is unwilling to process the request because its header fields are too large.",
    ],
    "451" => [
        "title" => "Unavailable For Legal Reasons",
        "description" => "The user-agent requested a resource that cannot legally be provided.",
    ],

    // 5xx: Server Error
    "500" => [
        "title" => "Internal Server Error",
        "description" => "The server has encountered a situation it doesn't know how to handle.",
    ],
    "501" => [
        "title" => "Not Implemented",
        "description" => "The request method is not supported by the server and cannot be handled.",
    ],
    "502" => [
        "title" => "Bad Gateway",
        "description" => "The server, while acting as a gateway or proxy, received an invalid response from the upstream server.",
    ],
    "503" => [
        "title" => "Service Unavailable",
        "description" => "The server is not ready to handle the request (e.g. for maintenance).",
    ],
    "504" => [
        "title" => "Gateway Timeout",
        "description" => "The server, while acting as a gateway or proxy, did not get a response in time from the upstream server.",
    ],
    "505" => [
        "title" => "HTTP Version Not Supported",
        "description" => "The HTTP version used in the request is not supported by the server.",
    ],
    "506" => [
        "title" => "Variant Also Negotiates",
        "description" => "The server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself.",
    ],
    "507" => [
        "title" => "Insufficient Storage",
        "description" => "The method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.",
    ],
    "508" => [
        "title" => "Loop Detected",
        "description" => "The server detected an infinite loop while processing the request.",
    ],
    "510" => [
        "title" => "Not Extended",
        "description" => "Further extensions to the request are required for the server to fulfill it.",
    ],
    "511" => [
        "title" => "Network Authentication Required",
        "description" => "The client needs to authenticate to gain network access.",
    ],
];