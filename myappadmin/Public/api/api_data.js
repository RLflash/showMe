define({ "api": [
  {
    "type": "get",
    "url": "/test",
    "title": "首页api",
    "description": "<p>根据ID（id）获取列表信息</p>",
    "group": "APIs",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>任务ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": true,
            "field": "page",
            "description": "<p>页数</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": true,
            "field": "perpage",
            "description": "<p>每页的条数</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "请求参数格式:",
          "content": "?id=123&page=1&perpage=20",
          "type": "string"
        }
      ]
    },
    "version": "1.0.0",
    "error": {
      "examples": [
        {
          "title": "错误返回值:",
          "content": "{\n   \"code\": 10003,\n   \"msg\": \"ParametersError [Method]:get_tests参数错误!\",\n   \"error\": {\n       \"id\": \"\",\n       \"page\": \"\",\n       \"perpage\": \"\"\n   },\n  \"status\": \"fail\"\n}",
          "type": "json"
        }
      ]
    },
    "success": {
      "examples": [
        {
          "title": "正确返回值:",
          "content": "  {\n\"code\": 0,\n\"msg\": \"OK \",\n\"data\": [\n    {\n        \"id\": \"622051004185471233\",\n        \"testCode\": \"000050\",\n    }\n],\n\"status\": \"ok\",\n\"count\": \"14\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "Application/Home/Controller/IndexController.class.php",
    "groupTitle": "APIs",
    "name": "GetTest"
  }
] });
