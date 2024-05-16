curl --request POST \
  --url http://0.0.0.0:8000/oauth/token \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --data '{
	"grant_type": "client_credentials",
	"client_id": "9c0d5875-5ba1-4ad9-84d6-5029b5f08ff3",
	"client_secret" : "Zj6GKUtSF77lZ8zGxthxfYvNhXesAoj0c2hCENsz",
	"scope": "*"
}'
