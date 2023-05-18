# Use the official nginx base image
FROM nginx




# Copy the source files from the "Edu" directory to the current working directory
COPY C:\wamp64\www\Edu  /usr/share/nginx/html

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start the nginx server
CMD ["nginx", "-g", "daemon off;"]
