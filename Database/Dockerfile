# Use the official MySQL image from Docker Hub
FROM mysql:latest


# Set environment variables for MySQL configuration
ENV MYSQL_ROOT_PASSWORD=1234

# Expose the MySQL port
EXPOSE 3306

# Copy SQL files to initialize the database
COPY ./studentDB.sql /docker-entrypoint-initdb.d/

# Start MySQL service
# CMD ["mysqld"]